<?php

class BaseModel
{
    protected $source;
    protected $dictionaries;

    private $collection;

    public function __construct()
    {
        if (empty($this->source)) {
            throw new Exception("Source is not set.");
        }

        $source = app_path() . '/storage/data/' . $this->source;

        if (!file_exists($source)) {
            throw new Exception("XML source file not found.");
        }

        $xml = simplexml_load_file($source);

        foreach ($xml->children() as $xmlRow) {

            $fields = [];

            foreach ($xmlRow->children() as $xmlField) {
                $key    = (string) $xmlField->attributes();
                $value  = (string) $xmlField;                

                $fields[$key] = $value;
            }

            $rows[] = $fields;
        }

        $this->collection = new Illuminate\Support\Collection($rows);
    }

    public function __call($method, $params)
    {
        if (method_exists($this->collection, $method)) {
            return call_user_func_array(array($this->collection, $method), $params);
        }
        
        throw new Exception("No '{$method}' method found.");
    }
}

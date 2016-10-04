<?php

class BaseRepository
{
    protected $modelName;
    protected $dictionaries;

    private $repository;

    final protected function model()
    {
        if (empty($repository)) {
            $repository = new $this->modelName;
        }

        return $repository;
    }

    final public function getDictionary($key = null)
    {
        if (empty($this->dictionaries)) return array();

        if (empty($key)) return $this->dictionaries;
        
        if (empty($this->dictionaries[$key])) return array();
        
        return $this->dictionaries[$key];
    }
    
}
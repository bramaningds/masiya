<?php

class UserRepository extends BaseRepository implements UserInterface
{
    protected $modelName    = "UserModel";

    protected $dictionaries = [
        'status' => [
            1 => 'Masuk',
            2 => 'Cuti',
            3 => 'Libur'
        ]
    ];

    public function first()
    {
        return $this->model()->first();
    }

    public function groupByCity()
    {
        return $this->model()->groupBy('city');
    }

    public function groupByDepartment()
    {
        return $this->model()->groupBy('department');
    }
}

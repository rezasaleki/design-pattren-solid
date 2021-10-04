<?php

namespace App\Factory;

use App\Factory\Car;

class CarModelS implements Car
{
    protected $model = 's';
    public function getModel()
    {
        return $this->model;
    }
}

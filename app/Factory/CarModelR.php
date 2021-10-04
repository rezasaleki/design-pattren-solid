<?php

namespace App\Factory;

use App\Factory\Car;

class CarModelR implements Car
{
    protected $model = 'r';
    public function getModel()
    {
        return $this->model;
    }
}

<?php

namespace App\Factory;

class CarFactory
{
    protected $car;

    public function make($model)
    {
        $model = strtolower($model);
        if ($model == 's') {
            return $this->car = new CarModelS();
        } else if ($model == 'r') {
            return $this->car = new CarModelR();
        } else {
            return $this->car = new CarModelNotDefined();
        }
    }
}

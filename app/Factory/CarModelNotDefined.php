<?php

namespace App\Factory;

use App\Factory\Car;

class CarModelNotDefined implements Car
{
    public function getModel()
    {
        return 'this model is not defined';
    }
}

<?php

namespace App\Adapter;

class CarismaPal
{
    public function doPayment($amount)
    {
        echo "Paying via CarismaPal: " . $amount;
    }
}

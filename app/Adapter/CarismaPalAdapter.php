<?php

namespace App\Adapter;

class CarismaPalAdapter implements PaymentAdapter
{
    private $carismaPal;
    public function __construct(CarismaPal $carismaPal)
    {
        $this->carismaPal = $carismaPal;
    }
    public function pay($amount)
    {
        $this->carismaPal->doPayment($amount);
    }
}

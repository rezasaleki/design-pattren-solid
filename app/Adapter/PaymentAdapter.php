<?php

namespace App\Adapter;

interface PaymentAdapter
{
    public function pay($amount);
}

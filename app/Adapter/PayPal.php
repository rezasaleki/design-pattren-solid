<?php

namespace App\Adapter;

class PayPal
{
    public function sendPayment($amount) // rename to pleasePayThePrice
    {
        echo "Paying via PayPal: " . $amount;
    }
}

<?php

namespace App\Decorator;

class Email implements EmailBody
{
    public function loadBody()
    {
        echo "This is the main Email body.<br />";
    }
}

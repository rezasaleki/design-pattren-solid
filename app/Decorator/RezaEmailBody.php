<?php

namespace App\Decorator;

use App\Decorator\EmailBodyDecorator;

class RezaEmailBody extends EmailBodyDecorator
{
    public function loadBody()
    {
        echo 'This is the extra content for Reza.<br />';
        $this->emailBody->loadBody();
    }
}

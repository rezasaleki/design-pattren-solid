<?php

namespace App\Decorator;

abstract class EmailBodyDecorator implements EmailBody
{
    protected $emailBody;
    function __construct(EmailBody $emailBody)
    {
        $this->emailBody = $emailBody;
    }
    abstract public function loadBody();
}

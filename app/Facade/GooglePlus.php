<?php

namespace App\Facade;

class GooglePlus implements ShareInterface
{
    private $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function share()
    {
        echo "Sharing by {$this->message} on Google+ .<br/>";
    }
}

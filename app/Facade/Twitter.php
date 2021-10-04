<?php

namespace App\Facade;

class Twitter implements ShareInterface
{
    private $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function share()
    {
        echo "Sharing by {$this->message} on Twitter.<br/>";
    }
}

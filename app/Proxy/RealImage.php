<?php

namespace App\Proxy;

class RealImage implements ImageProxyInterface
{
    protected $filename;

    function __construct($filename)
    {
        $this->filename = $filename;
        $this->loadFromDisk();
    }

    public function display()
    {
        echo "Display {$this->filename}\n";
    }

    protected function loadFromDisk()
    {
        echo "Loading {$this->filename}\n";
    }
}

<?php

namespace App\Proxy;

class ProxyImage implements ImageProxyInterface
{
    protected $id;
    protected $image;
    protected $filename;

    function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function display()
    {
        if (null === $this->image) {
            $this->image = new RealImage($this->filename);
        }
        return $this->image->display();
    }
}

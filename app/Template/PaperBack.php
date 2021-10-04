<?php

namespace App\Template;

class PaperBack extends Book
{
    public function generateName($name)
    {
        echo "The Book Name Is \"$name\" & Should Be Printed.";
    }
}

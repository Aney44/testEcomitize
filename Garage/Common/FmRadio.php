<?php

namespace Garage\Common;

use Garage\Interfaces\RadioInterface;

class FmRadio implements RadioInterface
{
    public function musicOn()
    {
        echo ' music switched on ' . EOL;
    }
}
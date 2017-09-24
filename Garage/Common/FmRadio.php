<?php

namespace Garage\Common;

use Garage\Interfaces\RadioInterface;

class FmRadio implements RadioInterface
{
    /**
     * inform that radio is turned on
     */
    public function musicOn(): void
    {
        echo '    music switched on ' . EOL;
    }
}
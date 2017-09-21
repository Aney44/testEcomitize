<?php

namespace Main\Model\Cars;

use Main\Model\EngineVehicle;

class KamazCar extends EngineVehicle
{
    protected $name = 'kamaz';

    public function readDocumentation()
    {
        return ['move'];
    }
}
<?php

namespace Garage\Cars;

use Garage\EngineVehicle;

class KamazCar extends EngineVehicle
{
    protected $name = 'kamaz';

    public function readDocumentation()
    {
        return ['move'];
    }
}
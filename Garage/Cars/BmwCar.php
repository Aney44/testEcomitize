<?php

namespace Garage\Cars;

use Garage\EngineVehicle;

class BmwCar extends EngineVehicle
{
    protected $name = 'bmv';

    public function readDocumentation()
    {
        return ['move'];
    }
}
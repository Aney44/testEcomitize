<?php

namespace Main\Model\Cars;

use Main\Model\EngineVehicle;

class BmwCar extends EngineVehicle
{
    protected $name = 'bmv';

    public function readDocumentation()
    {
        return ['move'];
    }
}
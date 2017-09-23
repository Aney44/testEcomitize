<?php

namespace Garage\Bikes;

use Garage\EngineVehicle;

class HarleyDavidsonBike extends EngineVehicle
{
    protected $name = 'harley-davidson';

    public function readDocumentation()
    {
        return ['move'];
    }
}
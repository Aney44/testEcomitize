<?php

namespace Garage\Bikes;

use Garage\Common\EngineVehicle;

class HarleyDavidsonBike extends EngineVehicle
{
    protected $name = 'harley-davidson';

    /**
     * @return array
     */
    public function getDocumentation(): array
    {
        return ['move', 'refuel'];
    }
}
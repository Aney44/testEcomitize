<?php

namespace Garage\Boats;

use Garage\Common\EngineVehicle;

class Boat extends EngineVehicle
{
    /** @var string */
    protected $name = 'boat';

    public function move(): void
    {
        $this->showAction('swim');
    }

    /**
     * return available actions
     * @return array
     */
    public function getDocumentation(): array
    {
        return ['move', 'refuel'];
    }
}
<?php

namespace Garage\Helicopters;

use Garage\Common\EngineVehicle;

class Helicopter extends EngineVehicle
{
    /** @var string */
    protected $name = 'helicopter';

    /**
     * return available actions
     * @return array
     */
    public function getDocumentation(): array
    {
        return ['move', 'refuel'];
    }

    /**
     * aglomirate takeOff fly landing functions in 1 call
     */
    public function move(): void
    {
        $this->takeOff();
        $this->fly();
        $this->landing();
    }

    public function takeOff(): void
    {
        $this->showAction('takeOff');
    }

    public function fly(): void
    {
        $this->showAction('fly');
    }

    public function landing(): void
    {
        $this->showAction('landing');
    }
}
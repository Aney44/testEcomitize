<?php

namespace Garage\Cars;

use Garage\EngineVehicle;
use Garage\Interfaces\RadioInterface;

class BmwCar extends EngineVehicle implements RadioInterface
{
    protected $name = 'bmv';
    /* @var  RadioInterface $radio */
    protected $radio = '';

    public function setRadio($radio)
    {
        $this->radio = new $radio();
    }

    public function readDocumentation()
    {
        return ['move', 'musicOn', 'refuel'];
    }

    public function musicOn()
    {
        $this->radio->musicOn();
    }
}
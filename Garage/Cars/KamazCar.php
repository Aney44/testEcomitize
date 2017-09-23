<?php

namespace Garage\Cars;

use Garage\EngineVehicle;
use Garage\Exceptions\NoLoadsExceptions;

class KamazCar extends EngineVehicle
{
    protected $name = 'kamaz';
    protected $hasLoads = false;

    public function readDocumentation()
    {
        return ['move', 'putLoads', 'emptyLoads', 'refuel'];
    }

    public function putLoads()
    {
        $this->setHasLoads(true);
        $this->showAction('putLoads');
    }

    public function emptyLoads()
    {
        if (!$this->isHasLoads()) {
            throw new NoLoadsExceptions();
        }
        $this->showAction('emptyLoads');
        $this->setHasLoads(false);
    }

    /**
     * @return bool
     */
    public function isHasLoads()
    {
        return $this->hasLoads;
    }

    public function setHasLoads($hasLoads)
    {
        $this->hasLoads = $hasLoads;
    }

}
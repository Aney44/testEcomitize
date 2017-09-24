<?php

namespace Garage\Cars;

use Garage\Common\EngineVehicle;
use Garage\Exceptions\NoLoadsExceptions;

class KamazCar extends EngineVehicle
{
    protected $name = 'kamaz';
    protected $hasLoads = false;

    /**
     * @return array
     */
    public function getDocumentation(): array
    {
        return ['move', 'putLoads', 'emptyLoads', 'refuel'];
    }

    public function putLoads(): void
    {
        $this->setHasLoads(true);
        $this->showAction('put Loads');
    }

    /**
     * @throws NoLoadsExceptions
     */
    public function emptyLoads(): void
    {
        if (!$this->isHasLoads()) {
            throw new NoLoadsExceptions();
        }
        $this->showAction('empty Loads');
        $this->setHasLoads(false);
    }

    /**
     * @return bool
     */
    public function isHasLoads(): bool
    {
        return $this->hasLoads;
    }

    /**
     * @param $hasLoads
     */
    public function setHasLoads($hasLoads): void
    {
        $this->hasLoads = $hasLoads;
    }

}
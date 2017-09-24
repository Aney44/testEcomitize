<?php

namespace Garage\Cars;

use Garage\Common\EngineVehicle;
use Garage\Exceptions\NotRadioException;
use Garage\Interfaces\RadioInterface;

class BmwCar extends EngineVehicle implements RadioInterface
{
    /** @var string */
    protected $name = 'bmw';
    /* @var  RadioInterface */
    protected $radio;

    /**
     * set radio class from object or create new instance from class
     * @param object|string $radio
     * @throws NotRadioException
     */
    public function setRadio($radio): void
    {
        if (is_object($radio)) {
            $this->radio = $radio;
        } else {
            if (class_exists($radio)) {
                $this->radio = new $radio();
            }
        }
        if (!($this->radio instanceof RadioInterface)) {
            throw new NotRadioException();
        }
    }

    /**
     * return available actions
     * @return array
     */
    public function getDocumentation(): array
    {
        return ['move', 'musicOn', 'refuel'];
    }

    /**
     * turn on radio
     */
    public function musicOn(): void
    {
        if (is_object($this->radio)) {
            $this->radio->musicOn();
        }
    }
}
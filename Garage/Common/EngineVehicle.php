<?php

namespace Garage\Common;

use Garage\Interfaces\FuelInterface;

abstract class EngineVehicle
{
    protected $name = '';

    /**
     * EngineVehicle constructor.
     * @param array $params
     * Set properties init values. Ignore not existing properties
     */
    public function __construct(array $params = [])
    {
        $properties = get_class_vars(get_called_class());
        array_walk($params, function ($item, $key) use ($properties) {
            if (array_key_exists($key, $properties)) {
                $this->{'set' . ucfirst($key)}($item);
            }
        });
    }

    public function move(): void
    {
        $this->showAction('moving');
    }

    public function refuel($fuelType = FuelInterface::GAS_FUEL): void
    {
        $this->showAction('refuel ' . $fuelType);
    }

    protected function showAction(string $action): void
    {
        echo $this->getName() . ' ' . $action . EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    abstract public function getDocumentation(): array;
}
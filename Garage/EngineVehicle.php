<?php

namespace Garage;

use Garage\Interfaces\FuelInterface;

abstract class EngineVehicle
{
    protected $name;

    public function __construct(array $params = [])
    {
        $properties = get_class_vars(get_called_class());
        array_walk($params, function ($item, $key) use ($properties) {
            if (isset($properties[$key])) {
                $this->{'set' . ucfirst($key)}($item);
            }
        });
    }

    public function move()
    {
        $this->showAction('moving');
    }

    public function refuel($fuelType = FuelInterface::GAS_FUEL)
    {
        $this->showAction('refuel ' . $fuelType);
    }

    protected function showAction($action)
    {
        echo $this->getName() . ' ' . $action . EOL;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function readDocumentation();
}
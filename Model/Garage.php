<?php

namespace Main\Model;

class Garage
{
    public function get($name)
    {
        $vehicle = 'Main\Model\Cars\\' . ucfirst($name) . 'Car';
        return new $vehicle();
    }

    public function demonstrateAll()
    {
        $vehicleNames = ['bmw', 'kamaz'];
        foreach ($vehicleNames as $vehicleName) {
            $vehicle = $this->get($vehicleName);
            $documentation = $vehicle->readDocumentation();
            array_walk($documentation, function ($action) use ($vehicle) {
                $vehicle->$action();
            });
        }
    }
}
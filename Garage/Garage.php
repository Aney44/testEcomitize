<?php

namespace Garage;

use Garage\Exceptions\NoVechicleException;

class Garage
{
    private $config = [];

    public function __construct(array $config = [])
    {
        $this->config = include __DIR__ . './Resources/config.php';
        $this->config = array_merge($this->config, $config);
    }

    public function get($vehicleName, $params = [])
    {
        $vehicle = $this->getNamespace($vehicleName);
        return new $vehicle($params);
    }

    public function demonstrateAll()
    {
        $vehicleNames = ['bmw', 'kamaz', 'harley-davidson'];
        foreach ($vehicleNames as $vehicleName) {
            $vehicle = $this->get($vehicleName);
            $documentation = $vehicle->readDocumentation();
            array_walk($documentation, function ($action) use ($vehicle) {
                $vehicle->$action();
            });
        }
    }

    private function getNamespace($vihicleName)
    {
        if (isset($this->config['namespace'][$vihicleName])) {
            return $this->config['namespace'][$vihicleName];
        }
        throw  new NoVechicleException();

    }
}
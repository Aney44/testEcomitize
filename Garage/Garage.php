<?php

namespace Garage;

use Garage\Exceptions\NoVehicleException;

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
        if (!$this->hasVehicle($vehicleName)) {
            throw  new NoVehicleException();
        }

        $vehicle = $this->getNamespace($vehicleName);
        $paramsDefault = $this->getCreateParams($vehicleName);
        $params = array_merge($paramsDefault, $params);

        return new $vehicle($params);
    }

    public function demonstrateAll()
    {
        $vehicleNames = $this->getExistedVehicles();
        foreach ($vehicleNames as $vehicleName) {
            $vehicle = $this->get($vehicleName);
            $documentation = $vehicle->getDocumentation();
            $params = $this->getDemonstrateParams($vehicleName);
            array_walk($documentation, function ($action) use ($vehicle, $params) {
                if (isset($params[$action])) {
                    $vehicle->$action($params[$action]);
                } else {
                    $vehicle->$action();
                }
            });
        }
    }

    private function getExistedVehicles()
    {
        return array_keys($this->config['namespace']);
    }

    private function getDemonstrateParams(string $vehicleName)
    {
        $params = $this->config['params']['demonstrate'][$vehicleName];
        return isset($params) ? $params : [];
    }

    private function getCreateParams(string $vehicleName)
    {
        $params = $this->config['params']['create'][$vehicleName];
        return isset($params) ? $params : [];
    }

    private function getNamespace(string $vehicleName)
    {
        return $this->config['namespace'][$vehicleName];
    }

    private function hasVehicle(string $vehicleName)
    {
        return isset($this->config['namespace'][$vehicleName]);
    }
}
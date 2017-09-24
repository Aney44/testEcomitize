<?php

use Garage\Interfaces\FuelInterface;

if (!defined('EOL')) {
    define('EOL', "\r\n");
}
return [
    'namespace' => [
        'bmw' => 'Garage\Cars\BmwCar',
        'kamaz' => 'Garage\Cars\KamazCar',
        'harley-davidson' => 'Garage\Bikes\HarleyDavidsonBike',
        'boat' => 'Garage\Boats\Boat',
        'helicopter' => 'Garage\Helicopters\Helicopter',
    ],
    'params' => [
        'create' => [
            'bmw' => [
                'radio' => 'Garage\Common\FmRadio'
            ]
        ],
        'demonstrate' => [
            'kamaz' => [
                'refuel' => FuelInterface::DIESEL_FUEL
            ],
            'harley-davidson' => [
                'refuel' => FuelInterface::PETROL_FUEL
            ]
        ]
    ]
];
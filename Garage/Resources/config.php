<?php
if (!defined('EOL')) {
    define('EOL', "\r\n");
}
return [
    'namespace' => [
        'bmw' => 'Garage\Cars\BmwCar',
        'kamaz' => 'Garage\Cars\KamazCar',
        'harley-davidson' => 'Garage\Bikes\HarleyDavidsonBike',
    ],
    'params' => [
        'create' => [
            'bmw' => [
                'radio' => 'Garage\Common\FmRadio'
            ]
        ]
    ]
];
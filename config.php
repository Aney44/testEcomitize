<?php

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->addPsr4('Main\\Model\\', __DIR__ . '/Model');
$loader->addPsr4('Main\\Model\\Cars\\', __DIR__ . '/Model/Cars');
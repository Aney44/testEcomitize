<?php

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->setUseIncludePath(true);
$loader->addPsr4('Garage\\', __DIR__ . '\\..\\Garage');
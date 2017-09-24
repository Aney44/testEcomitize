<?php

namespace Garage\Exceptions;

class NoVehicleException extends \Exception
{
    protected $message = 'vechicle was stolen';
    protected $code = 500;
}
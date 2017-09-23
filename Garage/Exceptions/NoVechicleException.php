<?php

namespace Garage\Exceptions;

class NoVechicleException extends \Exception
{
    protected $message = 'vechicle was stolen';
    protected $code = 404;
}
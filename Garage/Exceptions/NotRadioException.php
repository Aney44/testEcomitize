<?php

namespace Garage\Exceptions;

class NotRadioException extends \Exception
{
    protected $message = 'Not a radio';
    protected $code = 500;
}
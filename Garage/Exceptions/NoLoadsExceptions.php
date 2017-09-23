<?php

namespace Garage\Exceptions;


class NoLoadsExceptions extends \Exception
{
    protected $message = 'there is no loads!';
    protected $code = 500;
}
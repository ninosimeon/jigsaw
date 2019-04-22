<?php

namespace App\Exceptions;

use Exception;

/**
 * Class FactoryClassNotFoundException
 * @package App\Exceptions
 */
class FactoryClassNotFoundException extends Exception
{
    protected $message = 'Factory class not found.';
}
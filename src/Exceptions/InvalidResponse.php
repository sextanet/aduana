<?php

namespace SextaNet\Aduana\Exceptions;

use Exception;

class InvalidResponse extends Exception
{
    public $message = 'Check your password or content';
}

<?php

namespace SextaNet\Aduana\Exceptions;

use Exception;

class TooShortPassword extends Exception
{
    public $message = 'Your password needs to be at least 10 characters';
}

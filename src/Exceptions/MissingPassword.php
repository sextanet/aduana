<?php

namespace SextaNet\Aduana\Exceptions;

use Exception;

class MissingPassword extends Exception
{
    public $message = "You don't have specified a password";
}

<?php

namespace SextaNet\Aduana;

use SextaNet\Aduana\Exceptions\MissingPassword;

abstract class Magic
{
    public static $CYPHER_TYPE = 'aes-256-cbc';

    public static $PASSWORD;

    public static function setPassword(string $password): void
    {
        self::$PASSWORD = $password;
    }

    public static function unsetPassword(): void
    {
        self::$PASSWORD = null;
    }

    public static function checkPassword()
    {
        if (is_null(self::$PASSWORD)) {
            throw new MissingPassword;
        }
    }
}

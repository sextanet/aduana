<?php

use SextaNet\Aduana\Aduana;

if (! function_exists('aduana_password')) {
    function aduana_password(string $password)
    {
        return Aduana::🔑($password);
    }
}

if (! function_exists('aduana_encrypt')) {
    function aduana_encrypt($data)
    {
        return Aduana::🔒($data);
    }
}
if (! function_exists('aduana_decrypt')) {
    function aduana_decrypt($data)
    {
        return Aduana::🔓($data);
    }
}

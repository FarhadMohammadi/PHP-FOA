<?php

namespace App\Core\Authentication;

class Auth
{
    public static function attempt(array $cridentials)
    {
        extract($cridentials);

        if($username = "Farhad" && $password == "123456") {
            return true;
        }

        return false;
    }
}
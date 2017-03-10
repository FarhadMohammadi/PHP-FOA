<?php

namespace App\Core\Dispatcher;

/**
 * Class Request
 */
class Request
{
    /**
     * @return string
     */
    public static function uri(): string
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/"
        );
    }

    /**
     * @return string
     */
    public static function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @param string $key
     * @return bool
     */
    public static function has(string $key): bool
    {
        $request = self::method() == "POST" ? $_POST : $_GET;

        if (isset($request[$key]) && !empty($request[$key])) {
            return true;
        }

        return false;
    }

    /**
     * @param string $key
     * @return string
     */
    public static function get(string $key): string
    {
        return self::method() == "POST" ? $_POST[$key] : $_GET[$key];
    }
}
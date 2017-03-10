<?php

namespace App\Core;

/**
 * Class App
 */
class App
{
    /**
     * @var array
     */
    protected static $container = [];

    private static $instance;

    private function __construct()
    {
    }

    /**
     * @param $key
     * @param $value
     */
    public static function bind($key, $value)
    {
        self::$container[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     */
    public static function get($key)
    {
        if (array_key_exists($key, self::$container)) {
            return self::$container[$key];
        }

        throw new Exception("No {$key} is bound in the container.");
    }

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    public function make(string $abstract)
    {
        return new $abstract();
    }
}
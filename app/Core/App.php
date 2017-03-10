<?php

namespace App\Core;

/**
 * Class App
 */
/**
 * Class App
 * @package App\Core
 */
class App
{
    /**
     * @var array
     */
    protected static $container = [];

    /**
     * @var
     */
    private static $instance;

    /**
     * App constructor.
     */
    private function __construct()
    {
    }

    /**
     * @param string $key
     * @param $value
     */
    public static function bind(string $key, $value)
    {
        self::$container[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     * @throws \Exception
     */
    public static function get($key)
    {
        if (array_key_exists($key, self::$container)) {
            return self::$container[$key];
        }

        throw new \Exception("No {$key} is bound in the container.");
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * @param string $abstract
     * @return mixed
     */
    public function make(string $abstract)
    {
        return new $abstract();
    }

    /**
     * @return array
     */
    public static function getContailer()
    {
        return self::$container;
    }
}
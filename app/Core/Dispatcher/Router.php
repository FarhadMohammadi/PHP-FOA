<?php

namespace App\Core\Dispatcher;

/**
 * Class Router
 */
class Router
{
    /**
     * @var array
     */
    protected $routes = [
        'GET'  => [],
        'POST' => []
    ];

    /**
     * @param $file
     * @return static
     */
    public static function load($file)
    {
        $router = new static();

        require $file;

        return $router;
    }

    /**
     * @param $routes
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $requestType
     * @return mixed
     * @throws \Exception
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {

            try {

                return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));

            } catch (\Exception $e) {
                die($e->getMessage());
            }
        }

        throw new \Exception("no route defined for this URI");
    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     * @throws \Exception
     */
    protected function callAction($controller, $action)
    {
        $controller = "App\\Http\\Controllers\\" . $controller;

        if (class_exists($controller)) {

            if (method_exists($controller, $action)) {
                return (new $controller)->$action();
            }

            throw new \Exception("{$controller} does not have a {$action} method.");
        }

        throw new \Exception("The {$controller} class does not exists.");
    }
}
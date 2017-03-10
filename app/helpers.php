<?php

use App\Core\App;

if (!function_exists('view')) {
    function view($name, $data = [])
    {
        extract($data);

        if (strpos($name, '.') !== FALSE) {
            $name = str_replace('.', '/', $name);
        }

        if (file_exists("../views/{$name}.view.php")) {
            return require "../views/{$name}.view.php";
        }

        throw new Exception("The {$name} view not Found.");
    }
}

if (!function_exists('redirect')) {
    function redirect($path)
    {
        return header("location: /{$path}");
    }
}

if (!function_exists('app')) {
    function app($abstract = null)
    {
        if (!is_null($abstract)) {
            return App::getInstance();
        }

        return App::getInstance()->make($abstract);
    }
}
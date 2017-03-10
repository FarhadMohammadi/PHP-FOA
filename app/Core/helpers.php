<?php

use App\Core\App;
use Illuminate\Support\Debug\Dumper;

if (!function_exists('view')) {
    function view($name, $data = [])
    {
        extract($data);

        if (strpos($name, '.') !== FALSE) {
            $name = str_replace('.', '/', $name);
        }

        if (file_exists(__DIR__ . "/../../resources/views/{$name}.view.php")) {
            return require __DIR__ . "/../../resources/views/{$name}.view.php";
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

        return (App::getInstance())->make($abstract);
    }
}

if (!function_exists('dd')) {
    function dd()
    {
        array_map(function ($x) {
            (new Dumper())->dump($x);
        }, func_get_args());

        die(1);
    }
}
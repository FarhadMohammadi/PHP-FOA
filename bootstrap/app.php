<?php

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;
use App\Core\Dispatcher\Router;

/**
 * realpath(__DIR__ . '/../') => "/var/www/MyFramework"
 */

App::bind('database_config', require __DIR__ . "/../config/database.php");

App::bind('database', new QueryBuilder(
    Connection::make(App::get('database_config'))
));

return Router::load(__DIR__ .  "/../app/Http/routes.php");
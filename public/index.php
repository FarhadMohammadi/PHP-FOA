<?php

ini_set("display_errors", 1);

require __DIR__ . "/../bootstrap/autoload.php";

$app = require_once __DIR__ . "/../bootstrap/app.php";

$app->direct(Request::uri(), Request::method());
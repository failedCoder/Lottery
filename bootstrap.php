<?php

//Bootstrap file for loading all of the necessary components 

use App\Request\Request;

require_once "vendor/autoload.php";

$config = require_once "config.php";

$dbConnection = App\Database\Connection::make($config['database']);

$queryBuilder = new App\Database\QueryBuilder($dbConnection);

$router = new App\Request\Router();

require_once "routes.php";

require_once $router->directTo(Request::getUri(), Request::getMethod());
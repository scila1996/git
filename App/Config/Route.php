<?php

use System\Core\Config;
use System\Libraries\Router\RouteCollector;

Config::$route->get('/home', ["Home", "index"]);
// Config::$route->get('/about', ["Home", "about"]);

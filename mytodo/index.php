<?php

$query = require 'core/bootstrap.php';

// //new up our router
// $router = new Router;

// //load any routes
// require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

// //direct traffic
// require  $router->direct($uri);

require Router::load('routes.php')
  ->direct($uri);
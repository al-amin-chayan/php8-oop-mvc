<?php

include 'vendor/autoload.php';

require 'core/bootstrap.php';

define('BASE_PATH', __DIR__ . '/');

use App\Core\{Router, Request};

Router::load('route.php')
    ->direct(Request::uri(), Request::method());
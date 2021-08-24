<?php

include 'vendor/autoload.php';

require 'core/bootstrap.php';

define('BASE_PATH', __DIR__ . '/');

Router::load('route.php')
    ->direct(Request::uri(), Request::method());
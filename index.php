<?php

include 'vendor/autoload.php';

require 'core/bootstrap.php';

define('BASE_PATH', __DIR__ . '/');

include Router::load('route.php')
    ->direct(Request::uri(), Request::method());
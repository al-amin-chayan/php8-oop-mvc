<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

use App\Core\App;
use App\Core\Database\{DB, Query};

App::bind('config', require 'config.php');

App::bind('db', new Query(
    DB::connect(App::get('config')['database'])
));
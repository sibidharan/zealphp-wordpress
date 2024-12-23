<?php

require 'vendor/autoload.php';
use ZealPHP\App; // Ensure that the ZealPHP\App class is defined in the autoloaded files
use ZealPHP\G;
App::superglobals(true);
App::$ignore_php_ext = false;
App::$coproc_implicit_request_handler = true;

$app = App::init('0.0.0.0', 9501);

$app->route("/test", function(){
    echo "Hello World!";
});
$app->run();
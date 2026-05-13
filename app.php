<?php

require 'vendor/autoload.php';

use ZealPHP\App;
use ZealPHP\G;

App::superglobals(true);
App::$ignore_php_ext = false;

$app = App::init('0.0.0.0', 9501);

$app->route("/test", function(){
    echo "Hello World!";
});

// WordPress Admin: redirect '/wp-admin' to '/wp-admin/index.php'
$app->route('/wp-admin', ['methods' => ['GET','POST','PUT','DELETE','OPTIONS','PATCH']], function() {
    $qs = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
    header('Location: /wp-admin/index.php' . $qs);
    return 301;
});

// Fallback: unmatched URLs → WordPress front controller (pretty permalinks, REST API, etc.)
// The framework's implicit routes handle PHP files in public/ with prefork isolation.
// This catches everything else — like Apache's RewriteRule . /index.php [L]
$app->setFallback(function() {
    $g = G::instance();
    $g->server['PHP_SELF'] = '/index.php';
    $g->server['SCRIPT_NAME'] = '/index.php';
    $g->server['SCRIPT_FILENAME'] = App::$cwd . '/public/index.php';
    App::includeFile(App::$cwd . '/public/index.php');
});

$app->run(['task_worker_num' => 0]);

<?php

use App\Router;
use App\Application;


error_reporting(E_ALL);
ini_set('display_errors', true);

require_once $_SERVER['DOCUMENT_ROOT'] . '/src/bootstrap.php';

$router = new Router();

$router->get('/', '\App\Controller::class' . '@index');
$router->get('about', '\App\Controller::class' . '@about');
$router->get('/test/*/test2/*', function ($param1, $param2) {
    return "Test page with param1=$param1 param2=$param2";
});
$router->get('/post/*/post2/*', function ($param1, $param2) {
    return "Post page with param1=$param1 param2=$param2";
});


$application = new Application($router);
$pageData = $application->run();









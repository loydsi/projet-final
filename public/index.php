<?php

use Router\Router;

require '../vendor/autoload.php';


/* je defini la constante VIEW qui nous sort du dossier public pour allez dans le dossier view*/ 
define('VIEW', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);

/*define('SCRIPT' . dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);*/


$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\BlogController@index');
//$router->get('/posts/:id', 'App\Controllers\BlogController@show');/* A voir */

$router->run();
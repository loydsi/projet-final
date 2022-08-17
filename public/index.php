<?php

use Router\Router;

require '../vendor/autoload.php';


/* je defini la constante VIEW qui nous sort du dossier public pour allez dans le dossier view*/ 
define('VIEW', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);

/*define('SCRIPT' . dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);*/


$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\SiteController@index');


$router->get('/user', 'App\Controllers\UserController@index');
$router->get('/userDataCompany', 'App\Controllers\UserController@showData'); 
$router->get('/userFacture', 'App\Controllers\UserController@showFacture'); 
$router->get('/userDevis', 'App\Controllers\UserController@showDevis'); 
$router->get('/userUpdate', 'App\Controllers\UserController@showUpdate'); 


$router->get('/admin', 'App\Controllers\Admin\AdminController@index');
$router->get('/adminCompany', 'App\Controllers\Admin\AdminController@showCompany');
$router->get('/adminAddCompany', 'App\Controllers\Admin\AdminController@showAddCompany');
$router->get('/adminDataCompany', 'App\Controllers\Admin\AdminController@showDataCompany');
$router->get('/adminUpdateCompany', 'App\Controllers\Admin\AdminController@showUpdateCompany');
$router->get('/adminFacture', 'App\Controllers\Admin\AdminController@showFacture');
$router->get('/adminAddFacture', 'App\Controllers\Admin\AdminController@showAddFacture');
$router->get('/adminDevis', 'App\Controllers\Admin\AdminController@showDevis');
$router->get('/adminAddDevis', 'App\Controllers\Admin\AdminController@showAddDevis');


$router->get('/connexion', 'App\Controllers\AuthController@index');
$router->get('/inscription', 'App\Controllers\AuthController@inscription');


$router->run();
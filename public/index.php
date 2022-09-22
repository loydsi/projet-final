<?php

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';


/* je defini la constante VIEW qui nous sort du dossier public pour allez dans le dossier view*/ 
define('VIEW', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('DB_NAME', 'essai');
define('DB_HOST', 'localhost:8889');
define('DB_USER', 'root');
define('DB_PWD', 'root');


$router = new Router($_GET['url']);

// page principal du site
$router->get('/', 'App\Controllers\SiteController@index');


// parti login du site
$router->get('/login', 'App\Controllers\AuthController@login'); 
$router->post('/login', 'App\Controllers\AuthController@loginCompany'); 
$router->get('/logout', 'App\Controllers\AuthController@logout'); 
$router->get('/compte', 'App\Controllers\AuthController@compte'); 

// partie admin du site
$router->get('/admin', 'App\Controllers\Admin\EntrepriseController@index');

$router->get('/adminFormCompany/create', 'App\Controllers\Admin\EntrepriseController@create');
$router->post('/adminFormCompany/create', 'App\Controllers\Admin\EntrepriseController@createCompany');

$router->get('/adminCompany', 'App\Controllers\Admin\EntrepriseController@showCompany');
$router->get('/adminDataCompany/:id', 'App\Controllers\Admin\EntrepriseController@showDataCompany');
$router->post('/adminCompany/delete/:id', 'App\Controllers\Admin\EntrepriseController@destroy');
$router->get('/adminFormCompany/:id', 'App\Controllers\Admin\EntrepriseController@edit');
$router->post('/adminFormCompany/:id', 'App\Controllers\Admin\EntrepriseController@update');

$router->get('/adminFacture', 'App\Controllers\Admin\FactureController@showFacture');
$router->get('/adminAddFacture', 'App\Controllers\Admin\FactureController@addFacture');

$router->get('/adminDevis', 'App\Controllers\Admin\DevisController@showDevis');
$router->get('/adminAddDevis', 'App\Controllers\Admin\DevisController@addDevis');

// parti user du site
$router->get('/user', 'App\Controllers\UserController@index');
$router->get('/userDataCompany', 'App\Controllers\UserController@showData');
$router->get('/userUpdate', 'App\Controllers\UserController@showUpdate');
$router->get('/userFacture', 'App\Controllers\UserController@showFacture');
$router->get('/userDevis', 'App\Controllers\UserController@showDevis');



try {
    $router->run(); // verifie sur nos differentes route si quelque chose matche
} catch (NotFoundException $e) {
    return $e->error404();
}

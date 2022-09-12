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

/*define('SCRIPT' . dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);*/


$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\SiteController@index');


/*$router->get('/user', 'App\Controllers\UserController@index');
$router->get('/userDataCompany', 'App\Controllers\UserController@showData'); 
$router->get('/userFacture', 'App\Controllers\UserController@showFacture'); 
$router->get('/userDevis', 'App\Controllers\UserController@showDevis'); 
$router->get('/userUpdate', 'App\Controllers\UserController@showUpdate'); */

$router->get('/login', 'App\Controllers\AuthController@login'); 
$router->post('/login', 'App\Controllers\AuthController@loginCompany'); 
$router->get('/logout', 'App\Controllers\AuthController@logout'); 
$router->get('/compte', 'App\Controllers\AuthController@compte'); 

$router->get('/admin', 'App\Controllers\Admin\AdminController@index');

$router->get('/adminFormCompany/create', 'App\Controllers\Admin\EntrepriseController@create');
$router->post('/adminFormCompany/create', 'App\Controllers\Admin\EntrepriseController@createCompany');

$router->get('/adminCompany', 'App\Controllers\Admin\EntrepriseController@showCompany');
$router->get('/adminDataCompany/:id', 'App\Controllers\Admin\EntrepriseController@showDataCompany');
$router->post('/adminCompany/delete/:id', 'App\Controllers\Admin\EntrepriseController@destroy');
$router->get('/adminFormCompany/:id', 'App\Controllers\Admin\EntrepriseController@edit');
$router->post('/adminFormCompany/:id', 'App\Controllers\Admin\EntrepriseController@update');

/*$router->get('/admin/enteprises', 'App\Controllers\EntrepriseController@index');// Affiche liste entreprise
$router->get('/admin/enteprises/create', 'App\Controllers\EntrepriseController@AddEntreprise');// Afficher le formulaire
$router->post('/admin/enteprises/create', 'App\Controllers\EntrepriseController@createPost');// Insère la data*/

$router->get('/adminAddCompany', 'App\Controllers\Admin\AdminController@showAddCompany');
//$router->post('/adminAddCompanyPost', 'App\Controllers\Admin\AdminController@AddCompany');


$router->get('/adminFacture', 'App\Controllers\Admin\AdminController@showFacture');
$router->get('/adminAddFacture', 'App\Controllers\Admin\AdminController@showAddFacture');
$router->get('/adminDevis', 'App\Controllers\Admin\AdminController@showDevis');
$router->get('/adminAddDevis', 'App\Controllers\Admin\AdminController@showAddDevis');
$router->get('/adminAddData', 'App\Controllers\Admin\AdminController@showAddData');



try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}

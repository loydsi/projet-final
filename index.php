<?php

spl_autoload_register(function( $class ){
	require_once lcfirst( str_replace( '\\', '/', $class ) ) . '.php';
});

if( array_key_exists( 'route', $_GET ) )
{
	switch( $_GET['route'] )
	{
		// partie general
		case 'home':
			$controller = new Controllers\FrontControllers();
			$controller->showHome();
			break;
		case 'inscription':
			$controller = new Controllers\FrontControllers();
			$controller->showRegister();
			break;
		case 'connexion':
			$controller = new Controllers\FrontControllers();
			$controller->showLogin();
			break;

		// partie user
		case 'user':
			$controller = new Controllers\UserController();
			$controller->showUser();
			break;
		case 'userdata':
			$controller = new Controllers\UserController();
			$controller->showUserData();
			break;
		case 'userupdate':
			$controller = new Controllers\UserController();
			$controller->showUserUpdate();
			break;
		case 'userfacture':
			$controller = new Controllers\UserController();
			$controller->showUserFacture();
			break;
		case 'userdevis':
			$controller = new Controllers\UserController();
			$controller->showUserDevis();
			break;

		// partie admin
		case 'admin':
			$controller = new Controllers\AdminController();
			$controller->showAdmin();
			break;
		case 'company':
			$controller = new Controllers\AdminController();
			$controller->showAdminCompany();
			break;
		case 'facture':
			$controller = new Controllers\AdminController();
			$controller->showAdminFacture();
			break;
		case 'devis':
			$controller = new Controllers\AdminController();
			$controller->showAdminDevis();
			break;
		case 'companydata':
			$controller = new Controllers\AdminController();
			$controller->showAdminDataCompany();
			break;
		case 'companyupdate':
			$controller = new Controllers\AdminController();
			$controller->showAdminUpdate();
			break;
		case 'companyadd':
			$controller = new Controllers\AdminController();
			$controller->showAdminAddCompany();
			break;
		case 'addfacture':
			$controller = new Controllers\AdminController();
			$controller->showAdminAddFacture();
			break;
		case 'adddevis':
			$controller = new Controllers\AdminController();
			$controller->showAdminAddDevis();
			break;
	}
}
else
{
	header('Location: index.php?route=home');
	exit();
}

/*if( array_key_exists( 'route', $_GET ) )
{
	switch( $_GET['route'] )
	{
		// partie general
		case 'home':
			$view = 'home.php';
            include_once 'view/layout.php';
			break;
		case 'inscription':
			$view = 'inscription.php';
            include_once 'view/layout.php';
			break;
		case 'connexion':
			$view = 'connexion.php';
            include_once 'view/layout.php';
			break;

		// partie user
		case 'user':
			$view = 'user.php';
            include_once 'view/layout.php';
			break;
		case 'userdata':
			$view = 'userDataCompany.php';
			include_once 'view/layout.php';
			break;
		case 'userupdate':
			$view = 'userUpdate.php';
			include_once 'view/layout.php';
		case 'userfacture':
			$view = 'userFacture.php';
			include_once 'view/layout.php';
		case 'userdevis':
			$view = 'userDevis.php';
			include_once 'view/layout.php';

		// partie admin
		case 'admin':
			$view = 'admin.php';
			include_once 'view/layout.php';
		case 'company':
			$view = 'adminCompany.php';
			include_once 'view/layout.php';
		case 'facture':
			$view = 'adminFacture.php';
			include_once 'view/layout.php';
		case 'devis':
			$view = 'adminDevis.php';
			include_once 'view/layout.php';
		case 'companydata':
			$view = 'adminDataCompany.php';
			include_once 'view/layout.php';
		case 'companyupdate':
			$view = 'adminUpdateCompany.php';
			include_once 'view/layout.php';
		case 'companyadd':
			$view = 'adminAddCompany.php';
			include_once 'view/layout.php';
		case 'addfacture':
			$view = 'adminAddFacture.php';
			include_once 'view/layout.php';
		case 'adddevis':
			$view = 'adminAddDevis.php';
			include_once 'view/layout.php';
	}
}
else
{
	header('Location: index.php?route=home');
	exit();
}*/


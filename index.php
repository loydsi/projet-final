<?php

if( array_key_exists( 'route', $_GET ) )
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
}


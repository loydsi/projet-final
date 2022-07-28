<?php

if( array_key_exists( 'route', $_GET ) )
{
	switch( $_GET['route'] )
	{
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
		case 'user':
			$view = 'userProfil.php';
            include_once 'view/layout.php';
			break;
		case 'userdata':
			$view = 'userDataCompany.php';
			include_once 'view/layout.php';
			break;
		case 'updateUser':
			$view = 'userUpdate.php';
			include_once 'view/layout.php';
		case 'userfacture':
			$view = 'userFacture.php';
			include_once 'view/layout.php';
		case 'userdevis':
			$view = 'userDevis.php';
			include_once 'view/layout.php';
	}
}
else
{
	header('Location: index.php?route=home');
	exit();
}


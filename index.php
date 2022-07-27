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
	}
}
else
{
	header('Location: index.php?route=home');
	exit();
}


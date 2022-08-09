<?php
namespace Controllers;

class FrontControllers 
{
    public function showHome()
    {
        $view = 'home.php';
        include_once 'view/layout.php';
    }

    public function showRegister()
    {
        $view = 'inscription.php';
        include_once 'view/layout.php';
    }

    public function showLogin()
    {
        $view = 'connexion.php';
        include_once 'view/layout.php';
    }

}
<?php
namespace Controllers;

class UserController
{
    public function showUser()
    {
        $view = 'user.php';
        include_once 'view/layout.php';
    }

    public function showUserData()
    {
        $view = 'userDataCompany.php';
		include_once 'view/layout.php';
    }

    public function showUserUpdate()
    {
        $view = 'userUpdate.php';
		include_once 'view/layout.php';
    }

    public function showUserFacture()
    {
        $view = 'userFacture.php';
		include_once 'view/layout.php';
    }

    public function showUserDevis()
    {
        $view = 'userDevis.php';
		include_once 'view/layout.php';
    }
} 
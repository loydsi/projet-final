<?php
namespace Controllers;

class AdminController
{
    public function showAdmin()
    {
        $view = 'admin.php';
		include_once 'view/layout.php';
    }

    public function showAdminCompany()
    {
        $view = 'adminCompany.php';
		include_once 'view/layout.php';
    }

    public function showAdminFacture()
    {
        $view = 'adminFacture.php';
		include_once 'view/layout.php';
    }

    public function showAdminDevis()
    {
        $view = 'adminDevis.php';
		include_once 'view/layout.php';
    }

    public function showAdminDataCompany()
    {
        $view = 'adminDataCompany.php';
		include_once 'view/layout.php';
    }

    public function showAdminUpdate()
    {
        $view = 'adminUpdateCompany.php';
		include_once 'view/layout.php';
    }

    public function showAdminAddCompany()
    {
        $view = 'adminAddCompany.php';
		include_once 'view/layout.php';
    }

    public function showAdminAddFacture()
    {
        $view = 'adminAddFacture.php';
		include_once 'view/layout.php';
    }

    public function showAdminAddDevis()
    {
        $view = 'adminAddDevis.php';
		include_once 'view/layout.php';
    }
}
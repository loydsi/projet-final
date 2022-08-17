<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class AdminController extends Controller{

    public function index()
    {
        return $this->view('admin.admin');
    }

    public function showCompany() 
    {
        return $this->view('admin.adminCompany'); /*compact('page'));  A voir */
    }

    public function showAddCompany() 
    {
        return $this->view('admin.adminAddCompany'); /*compact('page'));  A voir */
    }

    public function showDataCompany() 
    {
        return $this->view('admin.adminDataCompany'); /*compact('page'));  A voir */
    }

    public function showUpdateCompany() 
    {
        return $this->view('admin.adminUpdateCompany'); /*compact('page'));  A voir */
    }

    public function showFacture() 
    {
        return $this->view('admin.adminFacture'); /*compact('page'));  A voir */
    }

    public function showAddFacture() 
    {
        return $this->view('admin.adminAddFacture'); /*compact('page'));  A voir */
    }

    public function showDevis() 
    {
        return $this->view('admin.adminDevis'); /*compact('page'));  A voir */
    }

    public function showAddDevis() 
    {
        return $this->view('admin.adminAddDevis'); /*compact('page'));  A voir */
    }
}
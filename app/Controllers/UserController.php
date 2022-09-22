<?php

namespace App\Controllers;

class UserController extends Controller{

    public function index()
    {
        return $this->view('users.user');
    }

    public function showData() 
    {
        return $this->view('users.userDataCompany');
    }

    public function showFacture()
    {
        return $this->view('users.userFacture');
    }

    public function showDevis()
    {
        return $this->view('users.userDevis');
    }

    public function showUpdate()
    {
        return $this->view('users.userUpdate');
    }
}
<?php

namespace App\Controllers;


class AuthController extends Controller{

    public function index()
    {
        return $this->view('auth.connexion');
    }

    public function inscription() 
    {
        
        return $this->view('auth.inscription');
    }
}
<?php

namespace App\Controllers;

class SiteController extends Controller{

    public function index()
    {
        return $this->view('site.home');
    }

    public function show(int $id) 
    {
        return $this->view('entreprise.show', compact('id')); /* A voir */
    }
}
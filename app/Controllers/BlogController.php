<?php

namespace App\Controllers;

class BlogController extends Controller{

    public function index()
    {
        return $this->view('home');
    }

    public function show(int $id) 
    {
        return $this->view('entreprise.show', compact('id')); /* A voir */
    }
}
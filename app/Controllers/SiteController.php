<?php

namespace App\Controllers;

class SiteController extends Controller{

    public function index()
    {
        $req = $this->db->getPDO()->query('SELECT * FROM users');
        $users = $req->fetchAll();
        foreach ($users as $user) {
            echo $user->mail;
        }
        return $this->view('site.home');
    }

    public function show(int $id) 
    {
        return $this->view('entreprise.show', compact('id')); /* A voir */
    }
}
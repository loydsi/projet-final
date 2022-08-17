<?php

namespace App\Controllers;

class UserController extends Controller{

    public function index()
    {
        return $this->view('users.user');
    }

    public function showData() 
    {
        $stmt = $this->db->getPDO()->query('SELECT * FROM users JOIN entreprises ON users.id = entreprises.users_id');
        $data = $stmt->fetchAll();
        return $this->view('users.userDataCompany', compact('data'));
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
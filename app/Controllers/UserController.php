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
        $stmt = $this->db->getPDO()->query('SELECT * FROM users JOIN facture ON users.id = facture.users_id');
        $facture = $stmt->fetchAll();
        return $this->view('users.userFacture', compact('facture'));
    }

    public function showDevis()
    {
        $stmt = $this->db->getPDO()->query('SELECT * FROM users JOIN devis ON users.id = devis.users_id');
        $devis = $stmt->fetchAll();
        return $this->view('users.userDevis', compact('devis'));
    }

    public function showUpdate()
    {
        return $this->view('users.userUpdate');
    }
}
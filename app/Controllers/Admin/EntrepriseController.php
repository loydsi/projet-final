<?php

namespace App\Controllers\Admin;

use App\Models\Company;
use App\Controllers\Controller;

class EntrepriseController extends Controller {

    public function showCompany() 
    {
        $this->isAdmin();

        $company = new Company($this->getDB());
        $companys = $company->all();

        return $this->view('admin.adminCompany', compact('companys')); /*compact('page'));  A voir */
    }

    public function create()
    {
        $this->isAdmin();

        return $this->view('admin.adminFormCompany');
    }

    public function createCompany()
    {
        $this->isAdmin();

        $company = new Company($this->getDB());
        $companys["ville"] = array_pop($_POST);
        $companys["code_postal"] = array_pop($_POST);
        $companys["adresse"] = array_pop($_POST);
        $companys["siret"] = array_pop($_POST);
        $companys["telephone"] = array_pop($_POST);
        $companys["nom_entreprise"] = array_pop($_POST);

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $result = $company->create($_POST, $companys);

        if($result) {
            return header('Location: /adminCompany');
        }
    }

    public function edit(int $id)
    {
        $company = (new Company($this->getDB()))->findById($id);

        return $this->view('admin.adminFormCompany', compact('company'));
    }

    public function update(int $id)
    {
        $this->isAdmin();

        $company = new Company($this->getDB());
        $result = $company->update($id, $_POST);

        if($result) {
            return header('Location: /adminCompany');
        }
    }

    public function destroy(int $id)
    {
        $this->isAdmin();

        $company = new Company($this->getDB());
        $result = $company->destroy($id);

        if($result) {
            return header('Location: /adminCompany');
        }
    }

    public function showDataCompany(int $id) 
    {
        $this->isAdmin();

        $company = new Company($this->getDB());
        $company = $company->findById($id);

        return $this->view('admin.adminDataCompany', compact('company'));  
    }

    
    
}
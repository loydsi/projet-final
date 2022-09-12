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
        

        return $this->view('admin.adminFormCompany');
    }

    public function createCompany()
    {
        
       if (!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['nom_entreprise']) && !empty($_POST['telephone']) && !empty($_POST['siret']) && !empty($_POST['adresse']) && !empty($_POST['code_postal']) && !empty($_POST['ville'])) {

            
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            

            $company = new Company($this->getDB());
            $companys["ville"] = htmlentities(array_pop($_POST));
            $companys["code_postal"] = htmlentities(array_pop($_POST));
            $companys["adresse"] = htmlentities(array_pop($_POST));
            $companys["siret"] = htmlentities(array_pop($_POST));
            $companys["telephone"] = htmlentities(array_pop($_POST));
            $companys["nom_entreprise"] = htmlentities(array_pop($_POST));
            
            $result = $company->create($_POST, $companys);

            if($result) {
                return header('Location: /adminCompany');
            }
            
        } else {
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

        if (!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['nom_entreprise']) && !empty($_POST['telephone']) && !empty($_POST['siret']) && !empty($_POST['adresse']) && !empty($_POST['code_postal']) && !empty($_POST['ville'])) {

            $company = new Company($this->getDB());
            $companys['mail'] = htmlentities($_POST['mail']); 
            $companys['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); 
            $companys['nom_entreprise'] = htmlentities($_POST['nom_entreprise']); 
            $companys['telephone'] = htmlentities($_POST['telephone']); 
            $companys['siret'] = htmlentities($_POST['siret']); 
            $companys['adresse'] = htmlentities($_POST['adresse']); 
            $companys['code_postal'] = htmlentities($_POST['code_postal']); 
            $companys['ville'] = htmlentities($_POST['ville']); 
        
            $result = $company->update($id, $companys);

            if($result) {
                return header('Location: /adminCompany');
            }  

        } else {
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
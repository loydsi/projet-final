<?php

namespace App\Controllers\Admin;

use App\Models\Company;
use App\Controllers\Controller;

class AdminController extends Controller{

    public function index()
    {
        $this->isAdmin();

        return $this->view('admin.admin');
    }

    

    public function showAddCompany() 
    {
        $this->isAdmin();

        return $this->view('admin.adminAddCompany'); /*compact('page'));  A voir */
    }

    public function AddCompany() 
    {
        //$stmt = $this->db->getPDO()->prepare('INSERT * INTO users');
        
    }

    public function showAddData()
    {
        $this->isAdmin();

        return $this->view('admin.adminAddData'); /*compact('page'));  A voir */
    }

    

    public function showUpdateCompany() 
    {
        $this->isAdmin();

        return $this->view('admin.adminUpdateCompany'); /*compact('page'));  A voir */
    }

    public function showFacture() 
    {
        
        return $this->view('admin.adminFacture'); /*compact('page'));  A voir */
    }

    public function showAddFacture() 
    {
        if(isset($_POST['submit'])) 
        {
            $nom_company = $_POST['namecompany'];
            $id_entreprise = $_POST['id_entreprise'];
            echo 'bien joue';
            die;

            if(isset($_FILES['fichier']) and $_FILES['fichier']['error'] == 0) 
            {
                $dossier = 'facture/';
                $temp_name = $_FILES['fichier']['tmp_name'];
                var_dump($temp_name);
                if(!is_uploaded_file($temp_name))
                {
                    exit("le fichier est introuvable");
                }
                if($_FILES['fichier']['size'] >= 1000000)
                {
                    exit("Erreur, le fichier est trop volumineux");
                }
                $infosfichier = pathinfo($_FILES['fichier']['name']);
                $extension_upload = $infosfichier['extension'];
                var_dump($infosfichier);


                $extension_upload = strtolower($extension_upload);
                $extensions_autorisees = array('png', 'jpeg', 'jpg');
                if(!in_array($extension_upload, $extensions_autorisees))
                {
                    exit("eereur, veuillez inserer une image svp");
                }
                $nom_photo = $nom_company. "." . $extension_upload;
                if(!move_uploaded_file($temp_name, $dossier.$nom_photo))
                {
                    exit("Probleme dans le telechargement de la facture");
                }
                

            }else 
            {
                echo ('erreur');
            }
        }
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
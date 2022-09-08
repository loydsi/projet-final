<?php 

namespace App\Models;

class Company extends Model{

    protected $table = 'entreprises';
    protected $tabledeux = 'users';

    public function create(array $data, ?array $company = null)
    {
        parent::create($data);

        $company["users_id"] = $this->db->getPDO()->lastInsertId();

        
        $stmt = $this->db->getPDO()->prepare("INSERT entreprises (ville, code_postal, adresse, siret, telephone, nom_entreprise, users_id) VALUES (:ville, :code_postal, :adresse, :siret, :telephone, :nom_entreprise, :users_id)");
        $stmt->execute($company);
        

        return true;
    }
}
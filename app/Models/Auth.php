<?php

namespace App\Models;

use App\Models\Model;

class Auth extends Model {

    protected $table = 'users';

    public function getByMail(string $mail): Auth
    {
        
        return $this->query("SELECT * FROM $this->table WHERE mail = ?", [$mail], true);

    }
}
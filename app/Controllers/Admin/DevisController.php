<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class DevisController extends Controller {
    public function showDevis() 
    {
        return $this->view('admin.adminDevis');
    }

    public function addDevis() 
    {
        return $this->view('admin.adminAddDevis');
    }
}
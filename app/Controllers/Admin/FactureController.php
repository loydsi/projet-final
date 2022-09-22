<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class FactureController extends Controller {
    public function showFacture() 
    {
        return $this->view('admin.adminFacture');
    }

    public function addFacture() 
    {
        return $this->view('admin.adminAddFacture');
    }
}
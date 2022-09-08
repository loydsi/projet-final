<?php

namespace App\Controllers;

use App\Models\Auth;
use App\Validation\Validator;


class AuthController extends Controller{

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginCompany() 
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'mail' => ['required', 'min8'],
            'password' => ['required']
        ]);

        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /login');
            exit;
        }
        
        $auth = (new Auth($this->getDB()))->getByMail($_POST['mail']);

        if (password_verify($_POST['password'], $auth->password)) {
            
            $_SESSION['roles'] = (int) $auth->roles; // if si roles est egal a 1 alors acces admin sinon acces user
            if ($_SESSION['roles'] === 1) {
                return header('Location: /admin');
            } else {
                return header('Location: /user');
            }
        } else {
            return header('Location: /login');
        } 
    }

    public function logout()
    {
        session_destroy();

        return header('Location: /');
    }
}
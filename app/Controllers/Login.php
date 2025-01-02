<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login',
        ];

        return view('Login/v_login' , $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register',
        ];

        return view('Login/v_register', $data);
    }
}


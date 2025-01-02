<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginModel;

class Login extends BaseController
{
    protected $db;
    protected $loginModel;
    public function __construct(){
        $this->loginModel = new LoginModel();
    }
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

        return view('Login/v_register' , $data);
    }

    public function save()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $userModel = new LoginModel();
        $userModel->insertUser($data);

        return redirect()->to('/login');
    }

    public function login()
    {
        //login method
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $this->loginModel->getUser($username);
        if($data){
            if(password_verify($password, $data['password'])){
                return redirect()->to('/dashboard');
            }else{
                return redirect()->to('/login');
            }
        }else{
            return redirect()->to('/login');
        }
    }
    
    public function logOut()
    {
        $userid = session()->get('id');
        $row = $this->loginModel->getOne($userid);
        if (!empty($row)) {
            session()->destroy();
        }
        return redirect('login');
    }
}

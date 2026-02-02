<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Config\Services;


class LoginController extends BaseController
{

    public function index()
    {
        return Services::blade()->render('pages.auth.login', ['title' => 'Home']);
    }


    public function login()
    {
        $session = session();
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $sessionData = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'firstname' => $user['firstname'],
                    'lastname' => $user['lastname'],
                    'isLoggedIn' => true
                ];
                $session->set($sessionData);
                return redirect()->to('/');
            } else {
                $session->setFlashdata('error', 'Invalid password');
                return redirect()->back();
            }
        } else {
            $session->setFlashdata('error', 'Email not found');
            return redirect()->back();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }


}
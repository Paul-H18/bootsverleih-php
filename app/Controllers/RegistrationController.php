<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Enums\UserRoles;
use CodeIgniter\Config\Services;
use App\Models\UserModel;


class RegistrationController extends BaseController
{

    public function index()
    {
        return Services::blade()->render('pages.auth.registration.registration', ['title' => 'Reg']);
    }

    public function register()
    {
        $data = [
            'email' => $this->request->getPost('email'),
            'first_name'    => $this->request->getPost('first_name'),
            'last_name'    => $this->request->getPost('last_name'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('is_admin') ? UserRoles::ADMIN->value : UserRoles::CUSTOMER->value,
        ];

        $user = new UserModel();
        if($user->insert($data)) {
            return Services::blade()->render('pages.auth.login', ['title' => 'Login']);
        }
    }

}
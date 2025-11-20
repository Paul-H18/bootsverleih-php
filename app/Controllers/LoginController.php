<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Config\Services;


class LoginController extends BaseController
{

    public function index()
    {
        return Services::blade()->render('pages.auth.login', ['title' => 'Home']);
    }

}
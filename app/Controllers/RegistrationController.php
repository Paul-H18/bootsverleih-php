<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Config\Services;


class RegistrationController extends BaseController
{

    public function index()
    {
        return Services::blade()->render('pages.auth.registration', ['title' => 'Home']);
    }

}
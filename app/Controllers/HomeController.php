<?php

namespace App\Controllers;

use CodeIgniter\Config\Services;


class HomeController extends BaseController
{
    public function index(): string
    {
        return Services::blade()->render('pages.home', ['title' => 'Home']);
    }
}

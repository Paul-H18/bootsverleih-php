<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return Services::blade()->render('pages.home', ['title' => 'Home']);
    }
}

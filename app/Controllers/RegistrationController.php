<?php

namespace App\Controllers;

class RegistrationController extends BaseController
{

    protected $helpers = ['form'];

    public function index(): string
    {

        return view('register');
    }


    public function register()
    {

    }
}

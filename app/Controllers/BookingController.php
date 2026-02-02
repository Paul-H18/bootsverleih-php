<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;

class BookingController extends BaseController
{
    public function index()
    {
        return Services::blade()->render('pages.booking.index', ['title' => 'Buchung']);
    }
}

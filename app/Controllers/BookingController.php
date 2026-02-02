<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pier;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;

class BookingController extends BaseController
{
    public function index()
    {
        $pierModel = new Pier();
        $piers = $pierModel->where('is_active', true)->findAll();
        return Services::blade()->render('pages.booking.index', [
            'title' => 'Buchung',
            'piers' => $piers,
        ]);
    }
}

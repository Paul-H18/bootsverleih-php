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
        $piers = $pierModel->findAll();

        $user = session()->get('user');
        if($user['password']) {
            unset($user['password']);
        }

        return Services::blade()->render('pages.booking.index', [
            'title' => 'Buchung',
            'piers' => $piers,
            'user' => $user,
        ]);
    }

    public function pay()
    {
        $rules = [
            'start_date' => [
                'label' => 'Von',
                'rules' => 'required|valid_date'
            ],
            'end_date' => [
                'label' => 'Bis',
                'rules' => 'required|valid_date|greater_than_or_equal[start_date]',
                'errors' => [
                    'greater_than_or_equal' => 'Das enddatum muss hinter dem Startdatum liegen'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return Services::blade()->render('booking_dates_invalid', [
                'errors' => $this->validator->getErrors(),
                'validation' => $this->validator,
            ]);
        }

        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');

        return Services::blade()->render('pages.booking.pay', [
            'title' => 'Bezahlung',
        ]);
    }
}

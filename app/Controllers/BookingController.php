<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Enums\BookingStates;
use App\Enums\PaymentMethods;
use App\Models\Booking;
use App\Models\Pier;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;
use CodeIgniter\I18n\Time;

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
        $allowedMethods = implode(',', array_column(PaymentMethods::cases(), 'value'));

        $rules = [
            'start_date' => [
                'label' => 'Startdatum',
                'rules' => 'required|valid_date'
            ],
            'end_date' => [
                'label' => 'Enddatum',
                'rules' => 'required|valid_date'
            ],
            'payment_method' => [
                'label' => 'Zahlungsmethode',
                'rules' => "required|in_list[$allowedMethods]",
            ],
            'pier_id' => [
                'label' => 'Anlegestelle',
                'rules' => 'required|is_not_unique[piers.id]',
            ]
        ];

        if (!$this->validate($rules)) {
            return Services::blade()->render('booking_dates_invalid', [
                'errors' => $this->validator->getErrors(),
                'validation' => $this->validator,
            ]);
        }

        $pierModel = new Pier();
        $pier = $pierModel->find($this->request->getPost('pier_id'));



        $startDate = $this->request->getPost('start_date')  . ' 12:00:00';
        $endDate = $this->request->getPost('end_date') . ' 11:59:59';
        $paymentMethod = $this->request->getPost('payment_method');

        if (strtotime($endDate) < strtotime($startDate)) {
            return Services::blade()->render('pages.booking.booking_dates_invalid', [
                'errors' => ['end_date' => 'Das Enddatum muss hinter dem Startdatum liegen'],
                'validation' => $this->validator,
            ]);
        }

        if($pier['is_active'] != true) {
            return Services::blade()->render('pages.booking.pierInactive');
        }

        $user = session()->get('user');
        if($user['password']) {
            unset($user['password']);
        }

        $data = [
            'starting_at' => $startDate,
            'ending_at' => $endDate,
            'payment_method' => $paymentMethod,
            'pier_id' => $pier['id'],
            'user_id' => $user['id'],
            'data' => [],
            'status' => BookingStates::BOOKED->value,
            'created_at' => Time::now(),
            'updated_at' => Time::now(),
        ];

        $bookingModel = new Booking();

        $bookingId = $bookingModel->insert($data);

        if ($bookingId) {
            $booking = $bookingModel->find($bookingId);
            $pierModel->update($pier['id'], [
                'is_active' => 0,
            ]);
            return Services::blade()->render('pages.booking.orderSuccess', [
                'title' => 'Buchung erfolgreich',
                'booking' => $booking,
                'startDate' => Time::parse($booking['starting_at'])->toLocalizedString('dd.MM.yyyy'),
                'user' => $user,
                'pier' => $pier,
            ]);
        }




        return Services::blade()->render('pages.booking.orderSuccess', [
            'title' => 'Bezahlung',
        ]);
    }
}

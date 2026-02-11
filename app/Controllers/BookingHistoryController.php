<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Booking;
use App\Models\Pier;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;


class BookingHistoryController extends BaseController
{
    public function index()
    {
        $user = session()->get('user');
        if($user['password']) {
            unset($user['password']);
        }

        $bookingModel = new Booking();
        $bookings = $bookingModel->where('user_id', $user['id'])->findAll();

        $pierModel = new Pier();
        $piers = [];
        foreach ($bookings as $booking) {
            $piers[] = $pierModel->where('id', $booking['pier_id'])->find();
        }


        return Services::blade()->render('pages.account.bookingHistory', [
            'title' => 'Buchungsverlauf',
            'user' => $user,
            'bookings' => $bookings,
            'piers' => $piers,
        ]);

    }
}

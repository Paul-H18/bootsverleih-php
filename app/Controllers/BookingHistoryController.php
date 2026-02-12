<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Booking;
use App\Models\Pier;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;
use CodeIgniter\I18n\Time;

class BookingHistoryController extends BaseController
{
    public function index()
    {
        $user = session()->get('user');
        if($user['password']) {
            unset($user['password']);
        }

        $bookingModel = new Booking();
        $bookings = $bookingModel->where('user_id', $user['id'])
            ->orderBy('created_at', 'DESC')
            ->findAll();

        $pierModel = new Pier();

        foreach ($bookings as &$booking) {
            $booking['pier'] = $pierModel->find($booking['pier_id']);

            $booking['created_at_formatted'] = Time::parse($booking['created_at'])->toLocalizedString('dd.MM.yyyy HH:mm');
            $booking['starting_at_formatted'] = Time::parse($booking['starting_at'])->toLocalizedString('dd.MM.yyyy');
            $booking['ending_at_formatted'] = Time::parse($booking['ending_at'])->toLocalizedString('dd.MM.yyyy');

            $start = Time::parse($booking['starting_at']);
            $end = Time::parse($booking['ending_at']);
            $booking['duration_days'] = $start->difference($end)->getDays() + 1;
        }

        return Services::blade()->render('pages.account.bookingHistory', [
            'title' => 'Buchungsverlauf',
            'user' => $user,
            'bookings' => $bookings,
        ]);
    }
}
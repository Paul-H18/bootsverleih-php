<?php

namespace App\Enums;

enum BookingStates: string
{
    case BOOKED = 'booked';
    case CANCELLED = 'cancelled';
    case OPEN = 'open';

    public function translate(): string
    {
        return match($this) {
            self::BOOKED => 'Gebucht',
            self::CANCELLED => 'Abgebrochen',
            self::OPEN => 'Offen',
        };
    }

}

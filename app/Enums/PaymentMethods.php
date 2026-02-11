<?php

namespace App\Enums;

enum PaymentMethods: string
{
    case CASH = 'cash';
    case CREDIT_CARD = 'cc';
    case PAYPAL = 'paypal';
    case RATEPAY = 'ratepay';
    case INVOICE = 'invoice';

    public function translate(): string
    {
        return match($this) {
            self::CASH => 'Barzahlung',
            self::CREDIT_CARD => 'Kreditkarte',
            self::RATEPAY => 'Ratenzahlung',
            self::INVOICE => 'Rechnung',
            self::PAYPAL => 'PayPal',
        };
    }

}

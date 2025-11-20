<?php

namespace App\Enums;

enum UserRoles: string
{
    case CUSTOMER = 'customer';
    case ADMIN = 'administrator';

    public function translate(): string
    {
        return match($this) {
            self::CUSTOMER => 'Kunde',
            self::ADMIN => 'Admin',
        };
    }

}

<?php

namespace App\Enum;

enum StatusRegister: string
{
    case REJECTED = 'not_active';
    case APPROVED = 'active';
    case WAITING = 'pending_payment';

    public function label()
    {
        return match ($this) {
            self::REJECTED => 'Not Active',
            self::APPROVED => 'Active',
            self::WAITING => 'Pending Payment',
        };
    }

    public function color()
    {
        return match ($this) {
            self::REJECTED => 'rose',
            self::APPROVED => 'green',
            self::WAITING => 'amber',
        };
    }
}

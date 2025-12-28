<?php

namespace App\Enum;

enum StatusRegister: string
{
    case REJECTED = 'rejected';
    case APPROVED = 'approved';
    case WAITING = 'waiting';

    public function label()
    {
        return match ($this) {
            self::REJECTED => 'Rejected',
            self::APPROVED => 'Approved',
            self::WAITING => 'Waiting',
        };
    }

    public function color()
    {
        return match ($this) {
            self::REJECTED => 'red',
            self::APPROVED => 'green',
            self::WAITING => 'yellow',
        };
    }
}

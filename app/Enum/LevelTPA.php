<?php

namespace App\Enum;

enum LevelTPA: string
{
    case IQRO1 = 'iqro 1';
    case IQRO2 = 'iqro 2';
    case IQRO3 = 'iqro 3';
    case IQRO4 = 'iqro 4';
    case IQRO5 = 'iqro 5';
    case IQRO6 = 'iqro 6';

    case TAHSIN = 'tahsin';


    public function label()
    {
        return match ($this) {
            self::IQRO1 => 'Iqro 1',
            self::IQRO2 => 'Iqro 2',
            self::IQRO3 => 'Iqro 3',
            self::IQRO4 => 'Iqro 4',
            self::IQRO5 => 'Iqro 5',
            self::IQRO6 => 'Iqro 6',
            self::TAHSIN => 'Tahsin',
        };
    }
}


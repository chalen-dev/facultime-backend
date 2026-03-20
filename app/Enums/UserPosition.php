<?php

namespace App\Enums;

enum UserPosition: string
{
    case PROGRAM_HEAD = 'program_head';
    case FACULTY = 'faculty';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

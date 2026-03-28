<?php

namespace App\Enums;

enum EmailTypes: string
{
    // Add your cases here
    case PERSONAL = 'personal';
    case UNIVERSITY = 'university';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

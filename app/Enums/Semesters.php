<?php

namespace App\Enums;

enum Semesters: string
{
    // Add your cases here
    case FIRST = '1st';
    case SECOND = '2nd';
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

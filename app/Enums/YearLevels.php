<?php

namespace App\Enums;

enum YearLevels: string
{
    // Add your cases here
    case FIRST = '1st';
    case SECOND = '2nd';
    case THIRD = '3rd';
    case FOURTH = '4th';

    case NONE = 'none';


    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

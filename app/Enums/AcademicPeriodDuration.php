<?php

namespace App\Enums;

enum AcademicPeriodDuration: string
{
    // Add your cases here
    case TERM = 'term';
    case SEMESTRAL = 'semestral';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

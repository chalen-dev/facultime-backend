<?php

namespace App\Enums;

enum Genders: string
{
    // Add your cases here
    case MALE = 'male';
    case FEMALE = 'female';
    case OTHER = 'other';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

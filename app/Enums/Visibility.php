<?php

namespace App\Enums;

enum Visibility: string
{
    case PRIVATE = 'private';
    case PUBLIC = 'public';
    case SHARED = 'shared';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

<?php

namespace App\Enums;

enum RoomStatus: string
{
    // Add your cases here
    case AVAILABLE = 'available';
    case UNAVAILABLE = 'unavailable';
    case UNDER_MAINTENANCE = 'under_maintenance';
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

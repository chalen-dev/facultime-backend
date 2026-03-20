<?php

namespace App\Enums;

enum Privilege: string
{
    case OWNER = 'owner';
    case EDITOR = 'editor';
    case VIEWER = 'viewer';

    public static function allPrivileges(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function visitorPrivileges(): array
    {
        return [
            self::VIEWER->value,
            self::EDITOR->value,
        ];
    }
}

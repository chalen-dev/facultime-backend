<?php

namespace App\Models\Workspaces;

use App\Enums\Privilege;
use Illuminate\Database\Eloquent\Model;

class UserWorkspace extends Model
{
    protected $table = 'user_workspaces';

    protected $fillable = [
        // Add your fillable attributes here
        'user_id',
        'workspace_id',
        'is_archived',
        'privilege',
    ];

    protected function casts(): array
    {
        return [
            // Add your casts here
            'is_archived' => 'bool',
            'privilege' => Privilege::class,
        ];
    }
}

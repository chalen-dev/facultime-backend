<?php

namespace App\Models\SessionGroups;

use Illuminate\Database\Eloquent\Model;

class GroupColor extends Model
{
    protected $table = 'group_colors';

    protected $fillable = [
        // Add your fillable attributes here
        'name',
        'hex_code',
        'description'
    ];

    protected function casts(): array
    {
        return [
            // Add your casts here
        ];
    }

    public function sessionGroups()
    {
        return $this->hasMany(SessionGroup::class);
    }
}

<?php

namespace App\Models\Rooms;

use Illuminate\Database\Eloquent\Model;

class RoomFloorLevel extends Model
{
    protected $fillable = [
        // Add your fillable attributes here
        'name',
        'description'
    ];

    protected $casts = [
        // Add your casts here
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}

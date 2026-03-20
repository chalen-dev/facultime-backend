<?php

namespace App\Models\Rooms;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    protected $casts = [
        // Add your casts here
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}

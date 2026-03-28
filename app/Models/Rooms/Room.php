<?php

namespace App\Models\Rooms;

use App\Enums\RoomStatus;
use App\Models\Catalogs\Catalog;
use App\Models\Courses\Course;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        // Add your fillable attributes here
        'catalog_id',
        'room_type_id',
        'room_floor_level_id',
        'name',
        'capacity',
        'description',
        'status'
    ];

    protected $casts = [
        'capacity' => 'integer',
        'status' => RoomStatus::class
    ];

    public function courses()
    {
        return $this->belongsToMany(
            Course::class,
            'courses_exclusive_to_rooms',
            'room_id',
            'course_id'
        );
    }

    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function roomFloorLevel()
    {
        return $this->belongsTo(RoomFloorLevel::class);
    }
}

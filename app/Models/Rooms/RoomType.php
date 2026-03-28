<?php

namespace App\Models\Rooms;

use App\Models\Courses\ClassType;
use App\Models\Courses\Course;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = 'room_types';

    protected $fillable = [
        // Add your fillable attributes here
        'name',
        'description'
    ];

    protected function casts(): array
    {
        return [
            // Add your casts here
        ];
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function courses()
    {
        return $this->belongsToMany(
            Course::class,
            'courses_exclusive_to_room_types',
            'room_type_id',
            'course_id'
        );
    }

    public function classTypes()
    {
        return $this->belongsToMany(
            ClassType::class,
            'class_types_exclusive_to_room_types',
            'room_type_id',
            'class_type_id'
        );
    }
}

<?php

namespace App\Models\Courses;

use App\Models\Rooms\RoomType;
use Illuminate\Database\Eloquent\Model;

class ClassType extends Model
{
    protected $table = 'class_types';

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

    public function roomTypes(){
        return $this->belongsToMany(
            RoomType::class,
            'class_types_exclusive_to_room_types',
            'class_type_id',
            'room_type_id'
        );
    }

    public function courses()
    {
        return $this->belongsToMany(
            Course::class,
            'courses_class_types',
            'class_type_id',
            'course_id'
        );
    }
}

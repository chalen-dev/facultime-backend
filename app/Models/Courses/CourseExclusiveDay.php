<?php

namespace App\Models\Courses;

use App\Enums\DaysOfTheWeek;
use Illuminate\Database\Eloquent\Model;

class CourseExclusiveDay extends Model
{
    protected $table = 'course_exclusive_days';

    protected $fillable = [
        // Add your fillable attributes here
        'course_id',
        'day'
    ];

    protected function casts(): array
    {
        return [
            // Add your casts here
            'day' => DaysOfTheWeek::class
        ];
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

<?php

namespace App\Models\Courses;

use App\Enums\AcademicPeriodDuration;
use App\Models\AcademicPrograms\AcademicProgram;
use App\Models\Catalogs\Catalog;
use App\Models\Professors\Professor;
use App\Models\Rooms\Room;
use App\Models\Rooms\RoomType;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'catalog_id',
        'title',
        'name',
        'academic_period_duration',
        'professor_unit_load',
        'total_days_per_academic_term',
        'class_duration',
        'description',
    ];

    protected function casts(){
        return [
            'academic_period_duration' => AcademicPeriodDuration::class,
            'professor_unit_load' => 'decimal:1',
            'total_days_per_academic_term' => 'integer',
            'class_duration' => 'time',
        ];
    }

    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }

    public function academicPrograms()
    {
        return $this->belongsToMany(
            AcademicProgram::class,
            'courses_academic_programs',
            'course_id',
            'academic_program_id'
        );
    }

    public function roomTypes()
    {
        return $this->belongsToMany(
            RoomType::class,
            'courses_exclusive_to_room_types',
            'course_id',
            'room_type_id'
        );
    }

    public function professors()
    {
        return $this->belongsToMany(
            Professor::class,
            'professor_specializations',
            'course_id',
            'professor_id'
        );
    }

    public function rooms()
    {
        return $this->belongsToMany(
            Room::class,
            'courses_exclusive_to_rooms',
            'course_id',
            'room_id'
        );
    }

    public function classTypes()
    {
        return $this->belongsToMany(
            ClassType::class,
            'courses_class_types',
            'course_id',
            'class_type_id'
        );
    }

    public function courseExclusiveDays()
    {
        return $this->hasMany(CourseExclusiveDay::class);
    }

}

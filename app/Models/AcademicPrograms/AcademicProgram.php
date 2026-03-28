<?php

namespace App\Models\AcademicPrograms;

use App\Models\Courses\Course;
use App\Models\Professors\Professor;
use App\Models\SessionGroups\SessionGroup;
use App\Models\User\UserDetail;
use Illuminate\Database\Eloquent\Model;

class AcademicProgram extends Model
{
    protected $table = 'academic_programs';

    protected $fillable = [
        'name',
        'abbreviation',
        'is_active',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function userDetails()
    {
        return $this->hasMany(UserDetail::class);
    }

    public function courses()
    {
        return $this->belongsToMany(
            Course::class,
            'courses_academic_programs',
            'academic_program_id',
            'course_id'
        );
    }

    public function professors()
    {
        return $this->belongsToMany(
            Professor::class,
            'professor_academic_programs',
            'academic_program_id',
            'professor_id'
        );
    }

    public function sessionGroups()
    {
        return $this->hasMany(SessionGroup::class);
    }


}

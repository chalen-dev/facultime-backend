<?php

namespace App\Models\AcademicPrograms;

use App\Models\Courses\Course;
use App\Models\Professors\Professor;
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

        ];
    }

    public function userDetails()
    {
        return $this->hasMany(UserDetail::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function professors()
    {
        return $this->belongsToMany(Professor::class);
    }



}

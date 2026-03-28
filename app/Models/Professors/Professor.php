<?php

namespace App\Models\Professors;

use App\Enums\Genders;
use App\Models\AcademicPrograms\AcademicProgram;
use App\Models\Catalogs\Catalog;
use App\Models\Courses\Course;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professors';

    protected $fillable = [
        // Add your fillable attributes here
        'catalog_id',
        'professor_type_id',
        'professor_position_id',
        'max_unit_load',
        'is_active',
        'first_name',
        'last_name',
        'middle_name',
        'suffix',
        'gender',
        'age',
        'photo_path',
    ];

    protected $casts = [
        // Add your casts here
        'max_unit_load' => 'integer',
        'is_active' => 'boolean',
        'age' => 'integer',
        'gender' => Genders::class,
    ];

    public function catalogs(){
        return $this->belongsTo(Catalog::class);
    }

    public function academicPrograms(){
        return $this->belongsToMany(
            AcademicProgram::class,
            'professors_academic_programs',
            'professor_id',
            'academic_program_id'
        );
    }

    public function courses()
    {
        return $this->belongsToMany(
            Course::class,
            'professor_specializations',
            'course_id',
            'professor_id'
        );
    }

    public function professorEmails(){
        return $this->hasMany(ProfessorEmail::class);
    }

    public function professorContactNumbers(){
        return $this->hasMany(ProfessorContactNumber::class);
    }

    public function professorType(){
        return $this->belongsTo(ProfessorType::class);
    }

    public function professorPosition(){
        return $this->belongsTo(ProfessorPosition::class);
    }
}

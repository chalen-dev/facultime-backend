<?php

namespace App\Models\Courses;

use App\Enums\AcademicPeriodDuration;
use App\Models\AcademicPrograms\AcademicProgram;
use App\Models\Catalogs\Catalog;
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
        'description',
    ];

    protected function casts(){
        return [
            'academic_period_duration' => AcademicPeriodDuration::class,
        ];
    }

    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }

    public function academicPrograms()
    {
        return $this->belongsToMany(AcademicProgram::class);
    }
}

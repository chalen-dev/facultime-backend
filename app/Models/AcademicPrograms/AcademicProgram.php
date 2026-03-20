<?php

namespace App\Models\AcademicPrograms;

use Illuminate\Database\Eloquent\Model;

class AcademicProgram extends Model
{
    protected $fillable = [
        'name',
        'abbreviation',
        'is_active',
        'description',
    ];
}

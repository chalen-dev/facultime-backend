<?php

namespace App\Models\Records;

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

<?php

namespace App\Models\Professors;

use App\Enums\Genders;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
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
        'is_active' => 'boolean',
        'age' => 'integer',
        'gender' => Genders::class,
    ];

    public function professorEmails(){
        return $this->hasMany(ProfessorEmail::class);
    }


    public function professorType(){
        return $this->belongsTo(ProfessorType::class);
    }

    public function professorPosition(){
        return $this->belongsTo(ProfessorPosition::class);
    }
}

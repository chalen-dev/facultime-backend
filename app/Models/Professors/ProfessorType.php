<?php

namespace App\Models\Professors;

use Illuminate\Database\Eloquent\Model;

class ProfessorType extends Model
{
    protected $table = 'professor_types';

    protected $fillable = [
        // Add your fillable attributes here
        'name',
        'description'
    ];

    protected $casts = [
        // Add your casts here
    ];

    public function professors()
    {
        return $this->hasMany(Professor::class);
    }
}

<?php

namespace App\Models\Courses;

use Illuminate\Database\Eloquent\Model;

class ClassType extends Model
{
    protected $table = 'class_types';

    protected $fillable = [
        // Add your fillable attributes here
        'name',
        'description'
    ];

    protected function casts(): array
    {
        return [
            // Add your casts here
        ];
    }


}

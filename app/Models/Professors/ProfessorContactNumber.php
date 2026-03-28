<?php

namespace App\Models\Professors;

use Illuminate\Database\Eloquent\Model;

class ProfessorContactNumber extends Model
{
    protected $fillable = [
        // Add your fillable attributes here
        'professor_id',
        'contact_number',
        'description'
    ];

    protected function casts(): array
    {
        return [
            // Add your casts here
        ];
    }

    public function professor(){
        return $this->belongsTo(Professor::class);
    }
}

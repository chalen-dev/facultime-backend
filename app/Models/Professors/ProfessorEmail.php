<?php

namespace App\Models\Professors;

use App\Enums\EmailTypes;
use Illuminate\Database\Eloquent\Model;

class ProfessorEmail extends Model
{
    protected $fillable = [
        // Add your fillable attributes here
        'professor_id',
        'email',
        'type',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'type' => EmailTypes::class,
        ];
    }

    public function professor(){
        return $this->belongsTo(Professor::class);
    }
}

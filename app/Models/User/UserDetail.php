<?php

namespace App\Models\User;

use App\Enums\UserPosition;
use App\Models\Records\AcademicProgram;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
        'user_id',
        'academic_program_id',
        'first_name',
        'last_name',
        'middle_name',
        'suffix',
        'profile_photo_path',
        'position',
    ];

    protected function casts()
    {
        return [
            'position' => UserPosition::class,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function academicProgram()
    {
        return $this->belongsTo(AcademicProgram::class);
    }
}

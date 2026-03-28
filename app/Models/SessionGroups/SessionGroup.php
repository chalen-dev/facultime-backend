<?php

namespace App\Models\SessionGroups;

use App\Enums\YearLevels;
use App\Models\AcademicPrograms\AcademicProgram;
use App\Models\Workspaces\Workspace;
use Illuminate\Database\Eloquent\Model;

class SessionGroup extends Model
{
    protected $table = 'session_groups';

    protected $fillable = [
        // Add your fillable attributes here
        'academic_program_id',
        'workspace_id',
        'group_color_id',
        'name',
        'year_level',
        'description'
    ];

    protected function casts(): array
    {
        return [
            // Add your casts here
            'year_level' => YearLevels::class,
        ];
    }

    public function academicProgram()
    {
        return $this->belongsTo(AcademicProgram::class);
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function groupColor()
    {
        return $this->belongsTo(GroupColor::class);
    }
}

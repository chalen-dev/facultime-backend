<?php

namespace App\Models\Workspaces;

use App\Enums\Visibility;
use App\Models\SessionGroups\SessionGroup;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    protected $table = 'workspaces';

    protected $fillable = [
        // Add your fillable attributes here
        'name',
        'semester',
        'start_academic_year',
        'end_academic_year',
        'timetable_start_time',
        'timetable_end_time',
        'visibility',
        'description'
    ];

    protected function casts(): array
    {
        return [
            // Add your casts here
            'start_academic_year' => 'integer', //year
            'end_academic_year' => 'integer', //year
            'timetable_start_time' => 'time',
            'timetable_end_time' => 'time',
            'visibility' => Visibility::class,
        ];
    }

    public function automationSettings()
    {
        return $this->hasOne(AutomationSettings::class);
    }

    public function userWorkspaces()
    {
        return $this->hasMany(UserWorkspace::class);
    }

    public function sessionGroups()
    {
        return $this->hasMany(SessionGroup::class);
    }
}

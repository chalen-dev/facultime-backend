<?php

namespace App\Models\Workspaces;

use Illuminate\Database\Eloquent\Model;

class AutomationSettings extends Model
{
    protected $table = 'automation_settings';

    protected $fillable = [
        // Add your fillable attributes here
        'workspace_id',
        'is_lunch_timeslot_restricted',
        'utilize_laboratory_hour_spots',
    ];

    protected function casts(): array
    {
        return [
            // Add your casts here
            'is_lunch_timeslot_restricted' => 'bool',
            'utilize_laboratory_hour_spots' => 'bool',
        ];
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
}

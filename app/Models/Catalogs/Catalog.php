<?php

namespace App\Models\Catalogs;

use App\Enums\Visibility;
use App\Enums\Privilege;
use App\Models\Courses\Course;
use App\Models\Catalogs\UserCatalog;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = [
        'visibility',
        'public_visitor_privilege',
    ];

    protected function casts(){
        return [
            'visibility' => Visibility::class,
            'public_visitor_privilege' => Privilege::visitorPrivileges(),
        ];
    }

    public function userCatalogs()
    {
        return $this->hasMany(UserCatalog::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}

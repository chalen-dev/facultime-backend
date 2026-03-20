<?php

namespace App\Models\Catalogs;

use App\Enums\Privilege;
use Illuminate\Database\Eloquent\Model;

class UserCatalog extends Model
{
    protected $fillable = [
        'user_id',
        'catalog_id',
        'privilege',
    ];

    protected $casts = [
        'privilege' => Privilege::class,
    ];

}

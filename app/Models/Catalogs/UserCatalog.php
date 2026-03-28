<?php

namespace App\Models\Catalogs;

use App\Enums\Privilege;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class UserCatalog extends Model
{
    protected $table = 'user_catalogs';

    protected $fillable = [
        'user_id',
        'catalog_id',
        'privilege',
    ];

    protected $casts = [
        'privilege' => Privilege::class,
    ];

    public function catalog(){
        return $this->belongsTo(Catalog::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}

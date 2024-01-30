<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function collectibles(): HasMany
    {
        return $this->hasMany(Collectible::class);
    }
}

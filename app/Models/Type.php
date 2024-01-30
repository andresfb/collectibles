<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Books\Models\Format;

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

    public function formats(): HasMany
    {
        return $this->hasMany(Format::class);
    }
}

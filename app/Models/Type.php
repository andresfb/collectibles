<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Books\Models\Format;

class Type extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function collectibles(): HasMany
    {
        return $this->hasMany(Collectible::class);
    }

    public function formats(): HasMany
    {
        return $this->hasMany(Format::class);
    }

    public static function getListArray(): array
    {
        $list = static::orderBy('name')->get();

        $types = [];
        foreach ($list as $type) {
            $types[$type->code] = $type->name;
        }

        return $types;
    }

    public static function getId(string $code): int
    {
        return static::where('code', $code)
            ->firstOrFail()
            ->id;
    }
}

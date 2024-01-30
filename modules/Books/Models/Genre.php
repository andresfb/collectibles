<?php

namespace Modules\Books\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Books\Enums\GenreType;

class Genre extends Model
{
    use Sluggable;

    public $timestamps = false;

    protected $fillable = [
        'slug',
        'name',
        'type',
    ];

    protected $casts = [
        'type' => GenreType::class,
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class)
            ->withTimestamps();
    }
}

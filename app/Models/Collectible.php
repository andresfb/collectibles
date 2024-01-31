<?php

namespace App\Models;

use App\Enums\CollectibleStatus;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Books\Models\Book;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

class Collectible extends Model implements HasMedia
{
    use SoftDeletes;
    use HasFactory;
    use Sluggable;
    use InteractsWithMedia;
    use HasTags;

    protected $guarded = [];

    protected $casts = [
        'status' => CollectibleStatus::class,
        'release_year' => 'integer',
        'purchase_date' => 'date',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumb')
            ->acceptsMimeTypes([
                'image/jpeg',
                'image/png',
            ])->singleFile()
            ->withResponsiveImages()
            ->useDisk('media');

        $this->addMediaCollection('gallery')
            ->acceptsMimeTypes([
                'image/jpeg',
                'image/png',
            ])->withResponsiveImages()
            ->useDisk('media');
    }
}

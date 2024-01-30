<?php

namespace App\Models;

use App\Enums\CollectibleStatus;
use App\Enums\Condition;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Books\Models\Book;

class Collectible extends Model
{
    use SoftDeletes;
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'type_id',
        'name',
        'description',
        'release_year',
        'condition',
        'status',
        'price',
        'purchase_date',
    ];

    protected $casts = [
        'condition' => Condition::class,
        'status' => CollectibleStatus::class,
        'price' => 'integer',
        'release_year' => 'integer',
        'purchase_date' => 'date',
    ];

    protected function price(): Attribute
    {
        return Attribute::make(
            get: static fn ($value) => $value / 100,
            set: static fn ($value) => $value * 100,
        );
    }

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
}

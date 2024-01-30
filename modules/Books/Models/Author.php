<?php

namespace Modules\Books\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use Sluggable;

    public $timestamps = false;

    protected $fillable = [
        'slug',
        'name',
        'info',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

<?php

namespace Modules\Books\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Books\Enums\EditionStatus;

class Edition extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'book_id',
        'format_id',
        'service_id',
        'location',
        'status',
    ];

    protected $casts = [
        'status' => EditionStatus::class,
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function format(): BelongsTo
    {
        return $this->belongsTo(Format::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}

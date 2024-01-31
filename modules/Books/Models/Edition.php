<?php

namespace Modules\Books\Models;

use App\Enums\Condition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Books\Enums\EditionStatus;

class Edition extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'condition' => Condition::class,
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

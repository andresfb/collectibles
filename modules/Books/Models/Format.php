<?php

namespace Modules\Books\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Format extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'type_id',
        'name',
        'is_digital',
    ];

    protected $casts = [
        'is_digital' => 'boolean',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}

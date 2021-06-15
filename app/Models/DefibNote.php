<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DefibNote extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function defib(): BelongsTo
    {
        return $this->belongsTo(Defib::class);
    }
}

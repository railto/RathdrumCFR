<?php

namespace App\Models;

use Eloquent;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\DefibNoteFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\DefibNote
 *
 * @property int $id
 * @property int $defib_id
 * @property int $user_id
 * @property string $note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Defib $defib
 * @method static DefibNoteFactory factory(...$parameters)
 * @method static Builder|DefibNote newModelQuery()
 * @method static Builder|DefibNote newQuery()
 * @method static Builder|DefibNote query()
 * @method static Builder|DefibNote whereCreatedAt($value)
 * @method static Builder|DefibNote whereDefibId($value)
 * @method static Builder|DefibNote whereId($value)
 * @method static Builder|DefibNote whereNote($value)
 * @method static Builder|DefibNote whereUpdatedAt($value)
 * @method static Builder|DefibNote whereUserId($value)
 * @mixin Eloquent
 */
class DefibNote extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function defib(): BelongsTo
    {
        return $this->belongsTo(Defib::class);
    }
}

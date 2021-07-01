<?php

namespace App\Models;

use Eloquent;
use Illuminate\Support\Carbon;
use Spatie\Activitylog\LogOptions;
use Database\Factories\DefibFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Defib
 *
 * @property int $id
 * @property string $location
 * @property string $model
 * @property string|null $serial
 * @property string $owner
 * @property string|null $last_inspected_by
 * @property string|null $last_inspected_at
 * @property string|null $last_serviced_at
 * @property string|null $pads_expire_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $name
 * @property string|null $coordinates
 * @property-read Collection|Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read Collection|DefibNote[] $notes
 * @property-read int|null $notes_count
 * @method static DefibFactory factory(...$parameters)
 * @method static Builder|Defib newModelQuery()
 * @method static Builder|Defib newQuery()
 * @method static Builder|Defib query()
 * @method static Builder|Defib whereCoordinates($value)
 * @method static Builder|Defib whereCreatedAt($value)
 * @method static Builder|Defib whereId($value)
 * @method static Builder|Defib whereLastInspectedAt($value)
 * @method static Builder|Defib whereLastInspectedBy($value)
 * @method static Builder|Defib whereLastServicedAt($value)
 * @method static Builder|Defib whereLocation($value)
 * @method static Builder|Defib whereModel($value)
 * @method static Builder|Defib whereName($value)
 * @method static Builder|Defib whereOwner($value)
 * @method static Builder|Defib wherePadsExpireAt($value)
 * @method static Builder|Defib whereSerial($value)
 * @method static Builder|Defib whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Defib extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $guarded = [];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll();
    }

    public function notes(): HasMany
    {
        return $this->hasMany(DefibNote::class);
    }
}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ReleasesStatus
 *
 * @property int $id
 * @property string $status
 * @property int $is_closed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReleasesStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReleasesStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReleasesStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReleasesStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReleasesStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReleasesStatus whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReleasesStatus whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReleasesStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ReleasesStatus extends Model {
	protected $fillable = ['status', 'is_closed'];
}
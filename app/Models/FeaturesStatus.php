<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FeaturesStatus
 *
 * @property int $id
 * @property string $status
 * @property int $is_closed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FeaturesStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FeaturesStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FeaturesStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FeaturesStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FeaturesStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FeaturesStatus whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FeaturesStatus whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FeaturesStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FeaturesStatus extends Model {
	protected $fillable = ['status', 'is_closed'];
}
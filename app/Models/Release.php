<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Release
 *
 * @property int $id
 * @property string $name
 * @property int|null $releases_status_id
 * @property int $project_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereReleasesStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Release extends Model {

}
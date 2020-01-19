<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $name
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property int $priority
 * @property int|null $features_status_id
 * @property int $project_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Feature[] $children
 * @property-read int|null $children_count
 * @property-read \App\Models\Feature|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Models\Feature newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Models\Feature newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Models\Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature whereFeaturesStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feature whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Feature extends Model {
	use NodeTrait;

}
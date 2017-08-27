<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\NewsTag
 * @property int                 $id
 * @property string              $name
 * @property string              $description
 * @property int                 $public
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null         $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NewsTag extends Model
{
    use SoftDeletes;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\NewsCategory
 *
 * @mixin \Eloquent
 * @property int                 $id
 * @property string              $name
 * @property string              $description
 * @property string              $slug
 * @property int                 $public
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null         $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsCategory whereUpdatedAt($value)
 */
class NewsCategory extends Model
{
    //
}

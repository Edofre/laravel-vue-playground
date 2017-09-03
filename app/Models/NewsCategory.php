<?php

namespace App\Models;

use App\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\NewsCategory
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
    use SoftDeletes, HasSlug;

    /** @var array */
    public $fillable = [
        'name',
        'description',
        'public',
    ];

    /** @var array */
    public $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function newsItems()
    {
        return $this->hasMany(NewsItem::class);
    }
}

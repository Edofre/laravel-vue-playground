<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models|NewsItem
 * @property int                 $id
 * @property int|null            $news_category_id
 * @property string              $title
 * @property string              $message
 * @property string              $slug
 * @property int                 $public
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null         $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereNewsCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NewsItem extends Model
{
    //
}

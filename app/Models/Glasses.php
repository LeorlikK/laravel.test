<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Glasses
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $text
 * @property int $price
 * @property int|null $discount
 * @property int|null $brand_id
 * @property int $is_public
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $category
 * @property-read int|null $category_count
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses query()
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses whereIsPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Glasses whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Glasses extends Model
{
    use HasFactory;
//    use SoftDeletes;
    public $guarded = [];
    public $table = 'glasses';

//    public $timestamps = false;
//    protected $dateFormat = 'U';
//    protected $fillable = ['name'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_glasses', 'glasses_id', 'category_id');
    }
}

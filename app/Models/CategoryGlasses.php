<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CategoryGlasses
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $category_id
 * @property int|null $glasses_id
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryGlasses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryGlasses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryGlasses query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryGlasses whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryGlasses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryGlasses whereGlassesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryGlasses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryGlasses whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CategoryGlasses extends Model
{
    use HasFactory;
    public $guarded = false;
}

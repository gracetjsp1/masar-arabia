<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MainProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'icon_image',
        'main_image',
        'banner_image',
        'icon_alt',
        'main_alt',
        'banner_alt',
        'description',
        'seo_title',
        'seo_keywords',
        'seo_description',
    ];
public function mainProduct()
{
    return $this->belongsTo(MainProduct::class);
}
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function subSubCategories()
    {
        return $this->hasMany(SubSubCategory::class);
    }
}

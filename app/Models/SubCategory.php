<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_product_id',
        'name',
        'slug',
        'image',
        'alt',
        'description',
        'seo_title',
        'seo_keywords',
        'seo_description',
    ];

    public function mainProduct()
    {
        return $this->belongsTo(MainProduct::class);
    }

    public function subSubCategories()
    {
        return $this->hasMany(SubSubCategory::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_product_id',
        'sub_category_id',
        'name',
        'slug',
        'sku',
        'image',
        'alt',
        'description',
        'highlight',
        'specification',
        'seo_title',
        'seo_keywords',
        'seo_description',
    ];

    public function mainProduct()
    {
        return $this->belongsTo(MainProduct::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
 
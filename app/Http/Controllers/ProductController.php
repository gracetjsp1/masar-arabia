<?php

namespace App\Http\Controllers;

use App\Models\MainProduct;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{
    // Show all 11 main products
    public function index()
    {
        $mainProducts = MainProduct::all();
        return view('products.index', compact('mainProducts'));
    }

    // Show subcategories of a selected main product
    //     public function showSubCategories($mainSlug)
    // {
    //     $mainProduct = MainProduct::with('subCategories')->where('slug', $mainSlug)->firstOrFail();
    //     $subCategories = $mainProduct->subCategories;

    //     return view('products.subcategories', compact('mainProduct', 'subCategories'));
    // }

    // public function showSubCategories($mainSlug)
    // {
    //     $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();
    //     $subCategories = $mainProduct->subCategories;
    //     return view('products.subcategories', compact('mainProduct', 'subCategories'));
    // }
    // public function subCategories()
    // {
    //     return $this->hasMany(SubCategory::class);
    // }
    public function showSubCategories($mainSlug)
    {
        $mainProduct = MainProduct::with('subCategories')->where('slug', $mainSlug)->firstOrFail();
        $subCategories = $mainProduct->subCategories;

        return view('products.subcategories', compact('mainProduct', 'subCategories'));
    }
    // Show sub-subcategories of a selected subcategory
    public function showSubSubCategories($mainSlug, $subSlug)
    {
        $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();
        $subCategory = SubCategory::where('slug', $subSlug)->firstOrFail();
        $subSubCategories = $subCategory->subSubCategories;
        return view('products.subsubcategories', compact('mainProduct', 'subCategory', 'subSubCategories'));
    }

    // Show detailed individual product page (from sub-subcategory)
    public function showProductDetail($mainSlug, $subSlug, $subSubSlug)
    {
        $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();
        $subCategory = SubCategory::where('slug', $subSlug)->firstOrFail();
        $subSubCategory = SubSubCategory::where('slug', $subSubSlug)->firstOrFail();

        return view('products.detail', compact('mainProduct', 'subCategory', 'subSubCategory'));
    }

    // Optional: Search products by name or SKU
//     public function search(Request $request)
// {
//     $query = $request->input('query');

//     // Search in Main Products
//     $mainProducts = MainProduct::where('name', 'like', "%$query%")->get();

//     // Search in Sub Categories
//     $subCategories = SubCategory::where('name', 'like', "%$query%")->get();

//     // Search in Sub-Sub Categories (individual products)
//     $subSubCategories = SubSubCategory::where('name', 'like', "%$query%")
//         ->orWhere('sku', 'like', "%$query%")
//         ->get();

//     return view('products.search_results', compact('query', 'mainProducts', 'subCategories', 'subSubCategories'));
// }
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $results = SubSubCategory::where('name', 'like', "%$query%")
    //         ->orWhere('sku', 'like', "%$query%")
    //         ->get();

    //     return view('products.search_results', compact('query', 'results'));
    // }
    public function search(Request $request)
{
    $query = $request->input('query');

    // Search sub-subcategories (products) by name or SKU
    $subSubCategories = SubSubCategory::with(['subCategory.mainProduct'])
        ->where('name', 'like', "%$query%")
        ->orWhere('sku', 'like', "%$query%")
        ->get();

    return view('products.search_results', compact('query', 'subSubCategories'));
}

// Store Main Product
public function storeMainProduct(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $slug = Str::slug($request->name);
    $folderPath = public_path("uploads/products/$slug");

    // Ensure nested directory is created
    File::makeDirectory($folderPath, 0755, true, true); // recursive = true

    $product = new MainProduct();
    $product->name = $request->name;
    $product->slug = $slug;
    $product->icon_image = "$slug/icon.png";
    $product->main_image = "$slug/main.jpg";
    $product->save();

    return redirect()->route('products.index')->with('success', "Main product created. Copy images to: uploads/products/$slug");
}

// Store Subcategory
public function storeSubCategory(Request $request, $mainSlug)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();
    $subSlug = Str::slug($request->name);
    $folderPath = public_path("uploads/products/$mainSlug/$subSlug");

    File::makeDirectory($folderPath, 0755, true, true);

    $subcategory = new SubCategory();
    $subcategory->main_product_id = $mainProduct->id;
    $subcategory->name = $request->name;
    $subcategory->slug = $subSlug;
    $subcategory->icon_image = "$mainSlug/$subSlug/icon.png";
    $subcategory->main_image = "$mainSlug/$subSlug/main.jpg";
    $subcategory->save();

    return redirect()->back()->with('success', "Subcategory created. Copy images to: uploads/products/$mainSlug/$subSlug");
}
private function getFirstParagraph($html)
{
    preg_match('/<p[^>]*>(.*?)<\/p>/is', $html, $matches);
    return $matches[0] ?? '';
}


// Store Sub-Subcategory
// public function storeSubSubCategory(Request $request, $mainSlug, $subSlug)
// {
//     $request->validate([
//         'name' => 'required|string|max:255',
//     ]);

//     $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();
//     $subCategory = SubCategory::where('slug', $subSlug)
//         ->where('main_product_id', $mainProduct->id)
//         ->firstOrFail();

//     $subSubSlug = Str::slug($request->name);
//     $folderPath = public_path("uploads/products/$mainSlug/$subSlug/$subSubSlug");

//     File::makeDirectory($folderPath, 0755, true, true);

//     $subSubCategory = new SubSubCategory();
//     $subSubCategory->sub_category_id = $subCategory->id;
//     $subSubCategory->name = $request->name;
//     $subSubCategory->slug = $subSubSlug;
//     $subSubCategory->icon_image = "$mainSlug/$subSlug/$subSubSlug/icon.png";
//     $subSubCategory->main_image = "$mainSlug/$subSlug/$subSubSlug/main.jpg";
//     $subSubCategory->sku = $request->sku ?? null;
//     $subSubCategory->save();

//     return redirect()->back()->with('success', "Sub-subcategory created. Copy images to: uploads/products/$mainSlug/$subSlug/$subSubSlug");
// }


}


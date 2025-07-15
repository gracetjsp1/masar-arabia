<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\MainProduct;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Support\Facades\File;

class CreateProductImageFolders extends Command
{
    protected $signature = 'products:create-folders';
    protected $description = 'Create image folders for all products, subcategories, and sub-subcategories';

    public function handle()
    {
        $basePath = public_path('uploads/products');

        foreach (MainProduct::all() as $main) {
            $mainPath = $basePath . '/' . $main->slug;
            File::makeDirectory($mainPath, 0755, true, true);
            $this->info("Created: $mainPath");

            $subCategories = SubCategory::where('main_product_id', $main->id)->get();
            foreach ($subCategories as $sub) {
                $subPath = $mainPath . '/' . $sub->slug;
                File::makeDirectory($subPath, 0755, true, true);
                $this->info("Created: $subPath");

                // $subSubs = SubSubCategory::where('sub_category_id', $sub->id)->get();
                // foreach ($subSubs as $subSub) {
                //     $subSubPath = $subPath . '/' . $subSub->slug;
                //     File::makeDirectory($subSubPath, 0755, true, true);
                //     $this->info("Created: $subSubPath");
                // }
            }
        }

        $this->info('All folders created successfully!');
    }
}

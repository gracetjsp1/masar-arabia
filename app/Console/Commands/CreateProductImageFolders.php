<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\MainProduct;
use App\Models\SubCategory;
use Illuminate\Support\Facades\File;

class CreateProductImageFolders extends Command
{
    protected $signature = 'products:create-folders';
    protected $description = 'Create image folders for all products and subcategories';

    public function handle()
    {
        $basePath = public_path('uploads/products');

        foreach (MainProduct::all() as $main) {
            $mainSlug = trim($main->slug);
            $mainPath = $basePath . '/' . $mainSlug;
            $this->createFolder($mainPath);

            $subCategories = SubCategory::where('main_product_id', $main->id)->get();
            foreach ($subCategories as $sub) {
                $subSlug = trim($sub->slug);
                $subPath = $mainPath . '/' . $subSlug;
                $this->createFolder($subPath);
            }
        }

        $this->info("\n✅ All main and subcategory folders created successfully!");
    }

    private function createFolder($path)
    {
        $path = trim($path);

        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true, true);
            $this->info("Created: " . $path);
        }

        if (File::isDirectory($path)) {
            try {
                File::put($path . '/.gitkeep', '');
            } catch (\Exception $e) {
                $this->error("⚠️ Could not write to: $path/.gitkeep – " . $e->getMessage());
            }
        }
    }
}

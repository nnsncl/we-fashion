<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "gender" => "women"
        ]);

        Category::create([
            "gender" => "men"
        ]);

        Product::factory()
            ->count(80)
            ->create()
            ->each(function($product) {
                $category = Category::find(rand(1, 2));
                $product->category()->associate($category);
                $files = Storage::allFiles($category->gender === 'women' ? 'public/images/women' : 'public/images/men');
                $files_names = str_replace("public/", "", $files);
                $fileindex = array_rand($files);
                $file = $files_names[$fileindex];
                $product->image()->create([ 'link' => $file ]);
                $product->save();
        });
    }
}

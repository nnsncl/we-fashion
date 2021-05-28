<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category_values = ["men", "women"];
        foreach($category_values as $category) {
            Category::create(["gender" => $category]);
        }

        $size_values = ["XS","S","M","L","XL"];
        foreach($size_values as $size) {
            Size::create(["value" => $size]);
        }

        Product::factory()
            ->count(80)
            ->create()
            ->each(function($product) {
                $category = Category::find(rand(1, 2));
                $product->category()->associate($category);

                $sizes = Size::pluck('id')
                                ->shuffle()
                                ->slice(0, rand(1, 5))
                                ->all();

                $files = Storage::allFiles($category->gender === 'women' ? 'public/images/women' : 'public/images/men');
                $files_names = str_replace("public/", "", $files);
                $fileindex = array_rand($files);
                $file = $files_names[$fileindex];
                
                $product->image()->create([ 'link' => $file ]);
                $product->sizes()->attach($sizes);
                $product->save();
        });
    }
}

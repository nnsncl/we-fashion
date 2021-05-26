<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            "gender" => "female"
        ]);

        Category::create([
            "gender" => "male"
        ]);

        Product::factory()
            ->count(80)
            ->create()
            ->each(function($product) {
                $category = Category::find(rand(1, 2));
                $product->category()->associate($category);
                $product->save();
        });
    }
}

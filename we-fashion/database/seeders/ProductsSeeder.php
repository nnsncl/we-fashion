<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductsModel;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductsModel::factory()
            ->count(80)            
            ->hasPosts(1)
            ->create();
    }
}

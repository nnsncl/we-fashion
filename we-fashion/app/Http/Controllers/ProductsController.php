<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('index', [
            'products' => $products
        ]);
    }

    public function discount(Product $discount_products) {
        $discount_products = DB::table('products')
            ->where('discount', '=', 1)
            ->get();
                
        return view('discount.index', [
            'discount_products' => $discount_products
        ]);
    }

}

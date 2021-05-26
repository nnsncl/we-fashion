<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::paginate(6);
        return view('index', [
            'products' => $products
        ]);
    }

    public function discount(Product $discount_products) {
        $discount_products = DB::table('products')
            ->where('discount', '=', 1)
            ->paginate(6);
                
        return view('front.discount.index', [
            'discount_products' => $discount_products
        ]);
    }

    public function details(int $id) {
        $details = Product::find($id);
        
        return view('front.details.index', [
            'details' => $details
        ]);
    }

    // public function menProducts(Product $men_products)
    // {
    //     $men_products = DB::table('products')
    //         ->where('gender', '=', 'male')
    //         ->get();

    //     return view('men.index', [
    //             'men_products' => $men_products
    //         ]);
    // }

    // public function womenProducts(Product $women_products)
    // {
    //     $women_products = DB::table('products')
    //         ->where('gender', '=', 'female')
    //         ->get();

    //     return view('women.index', [
    //             'women_products' => $women_products
    //         ]);
    // }


}

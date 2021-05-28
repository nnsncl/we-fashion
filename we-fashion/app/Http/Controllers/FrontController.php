<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index() {
        $products = Front::paginate(6);
        return view('front.index', [
            'products' => $products
        ]);
    }

    public function discount(Front $discount_products) {
        $discount_products = DB::table('products')
            ->where('discount', '=', 1)
            ->paginate(6);
                
        return view('front.discount.index', [
            'discount_products' => $discount_products
        ]);
    }

    public function details(int $id) {
        $details = Front::find($id);
        
        return view('front.details.index', [
            'details' => $details
        ]);
    }

    public function womenProducts(Front $women_products)
    {
        $women_products = DB::table('products')
            ->where('category_id', '=', 1)
            ->get();

        return view('front.categories.women.index', [
                'women_products' => $women_products
            ]);
    }

    public function menProducts(Front $men_products)
    {
        $men_products = DB::table('products')
            ->where('category_id', '=', 2)
            ->get();

        return view('front.categories.men.index', [
                'men_products' => $men_products
            ]);
    }
}

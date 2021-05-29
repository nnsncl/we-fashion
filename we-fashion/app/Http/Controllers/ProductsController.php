<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::paginate(6);
        $categories = Category::pluck('gender', 'id')->all();

        return view('front.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    } 

    public function discount(Product $discount_products) {
        $discount_products = Product::where('discount', '=', 1)->paginate(6);
        $categories = Category::pluck('gender', 'id')->all();

        return view('front.discount.index', [
            'discount_products' => $discount_products,
            'categories' => $categories,
        ]);
    }

    public function details(int $id) {
        $details = Product::find($id);
        $categories = Category::pluck('gender', 'id')->all();

        return view('front.details.index', [
            'details' => $details,
            'categories' => $categories,
        ]);
    }

    public function womenProducts(Product $women_products)
    {
        $women_products = Product::where('category_id', '=', 1)->paginate(6);
        $categories = Category::pluck('gender', 'id')->all();

        return view('front.categories.women.index', [
            'women_products' => $women_products,
            'categories' => $categories,
        ]);
    }

    public function menProducts(Product $men_products)
    {
        $men_products = Product::where('category_id', '=', 2)->paginate(6);
        $categories = Category::pluck('gender', 'id')->all();

        return view('front.categories.men.index', [
            'men_products' => $men_products,
            'categories' => $categories,
        ]);
    }
}

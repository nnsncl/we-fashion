<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administration;
use App\Models\Product;
use App\Models\Category;

class AdministrationController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => Product::class ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administration = Administration::paginate(15);
        $categories = Category::pluck('gender', 'id')->all();

        return view('admin.index', [
            'administration' => $administration,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('gender', 'id')->all();

        return view('admin.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Administration::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
            'published' => $request->input('published'),
            'discount' => $request->input('discount'),
            'ref' => $request->input('ref'),
            'category_id' => $request->input('category_id'),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Administration::find($id);
        $categories = Category::pluck('gender', 'id')->all();
        
        return view('admin.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Administration::where('id', '=', $id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'size' => $request->input('size'),
                'published' => $request->input('published'),
                'discount' => $request->input('discount'),
                'category_id' => $request->input('category_id'),
                'ref' => $request->input('ref')
        ]);

        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Administration::find($id);
        $product->delete();

        return redirect('/admin/products');
    }
}

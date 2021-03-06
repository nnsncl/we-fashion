<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;

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
        $administration = Product::paginate(15);
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
        $sizes = Size::pluck('value', 'id')->all();

        return view('admin.create', [
            'categories' => $categories,
            'sizes' => $sizes
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer|min:0',
            'published' => 'required',
            'discount' => 'required',
            'ref' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        // Prevent files to have the same names.
        $image_name = 'images/'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image_name);

        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'published' => $request->input('published'),
            'discount' => $request->input('discount'),
            'ref' => $request->input('ref'),
            'category_id' => $request->input('category_id'),
            'user_id' => auth()->user()->id
        ]);
        
        $product->image()->create(["link" => $image_name]);
        $product->sizes()->attach($request->input('sizes'));

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
        $product = Product::find($id);
        $categories = Category::pluck('gender', 'id')->all();
        $sizes = Size::pluck('value', 'id')->all();
        
        return view('admin.edit', [
            'product' => $product,
            'categories' => $categories,
            'sizes' => $sizes
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
        $product = Product::find($id);
        $product->sizes()->sync($request->sizes);
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
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
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/products');
    }
}

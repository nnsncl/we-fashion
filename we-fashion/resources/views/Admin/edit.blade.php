@extends('layouts.master')

@section('content')

    <div class="w-100 mb-16 " >
        <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Edit product.</h1>
    </div>
    <form class="border-2 border-gray-100 p-6 bg-white rounded-xl w-100 mt-3 mb-3" action="{{ route('products.update', $product->id ) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="flex flex-col-reverse md:flex-row justify-between flex-wrap items-start gap-3" >
            <div class="w-full flex justify-between flex-col mb-5" >
                <fieldset class="flex flex-col mb-3 ">
                    <label class="font-bold mb-1" for='name'>Name</label>
                    <input class="text-lg outline-none py-3" type="text" name='name' value="{{ $product->name }}" placeholder="{{ $product->name }}" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='description'>Description</label>
                    <input class="text-lg outline-none py-3" type="text" name='description' value="{{ $product->description }}" placeholder="{{ $product->description }}" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='price'>Price</label>
                    <input class="text-lg outline-none py-3" name='price' type='number' value="{{ $product->price }}" placeholder="{{ $product->price }}" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='size'>Size</label>
                    <input class="text-lg outline-none py-3" type="text" name='size' value="{{ $product->size }}" placeholder="{{ $product->size }}" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='published'>Published</label>
                    <input class="text-lg outline-none py-3" name="published" type="text" value="{{ $product->published }}" placeholder="{{ $product->published }}" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='discount'>Discount</label>
                    <input class="text-lg outline-none py-3" name="discount" type="text" value="{{ $product->discount }}" placeholder="{{ $product->discount }}" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='ref'>Reference</label>
                    <input class="text-lg outline-none py-3" name="ref" type="text" value="{{ $product->ref }}" placeholder="{{ $product->ref }}"  />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='category_id'>Category</label>
                    <input class="text-lg outline-none py-3" name="category_id" type="text" value="{{ $product->category_id }}" placeholder="{{ $product->category_id }}" />
                </fieldset>
            </div>
        </div>
        <div class="flex-auto flex gap-6">
            <button class="w-1/2 p-3 flex items-center justify-center rounded-md bg-black text-white" type="submit">Create</button>
            <a href="{{ route('products.index') }}" class="w-1/2 p-3 flex items-center justify-center rounded-md border border-gray-300" >Cancel</a>
        </div>
    </form>
@endsection
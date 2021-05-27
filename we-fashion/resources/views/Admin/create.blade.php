@extends('layouts.master')

@section('content')

    <div class="w-100 mb-16 " >
        <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Add a new product.</h1>
    </div>

    <form class="border-2 border-gray-100 p-6 bg-white rounded-xl w-100 mt-3 mb-3" action="/admin" method="POST" >
        @csrf
        
        <div class="flex flex-col-reverse md:flex-row justify-between flex-wrap items-start gap-3" >
            <div class="w-full flex justify-between flex-col mb-5" >
                <fieldset class="flex flex-col mb-3 ">
                    <label class="font-bold mb-1" for='name'>Name</label>
                    <input class="text-lg outline-none py-3" name='name' placeholder="Product name" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='description'>Description</label>
                    <input class="text-lg outline-none py-3" name='description' placeholder='Product description' />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='price'>Price</label>
                    <input class="text-lg outline-none py-3" name='price' type='number' placeholder="Product price" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='size'>Size</label>
                    <input class="text-lg outline-none py-3" name='size' placeholder="Product size" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='published'>Published</label>
                    <input class="text-lg outline-none py-3" name='published' placeholder="true, false" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='discount'>Discount</label>
                    <input class="text-lg outline-none py-3" name='discount' placeholder="true, false" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='ref'>Reference</label>
                    <input class="text-lg outline-none py-3" name='ref' placeholder="Product reference" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='category_id'>Category</label>
                    <input class="text-lg outline-none py-3" name='category_id' placeholder="1, 2" />
                </fieldset>
            </div>
        </div>
        <div class="flex-auto flex gap-6">
            <button class="w-1/2 p-3 flex items-center justify-center rounded-md bg-black text-white" type="submit">Create</button>
            <a href="/admin" class="w-1/2 p-3 flex items-center justify-center rounded-md border border-gray-300" >Cancel</a>
        </div>
    </form>
@endsection
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
                <fieldset class="flex gap-3 mb-3">
                    <div>
                        <label class="font-bold mb-1" for='published'>Public</label>
                        <input
                            class="text-lg outline-none py-3"
                            name="published"
                            type="radio"
                            value="0"
                            @if ($product->published === 0)
                                checked
                            @endif

                        />
                    </div>
                    <div>
                        <label class="font-bold mb-1" for='published'>Private</label>
                        <input
                            class="text-lg outline-none py-3"
                            name="published"
                            type="radio"
                            value="1"
                            @if ($product->published === 1)
                                checked
                            @endif
                        />
                    </div>
                </fieldset>
                <fieldset class="flex gap-3 mb-3">
                    <div>
                        <label class="font-bold mb-1" for='discount'>Active offer</label>
                        <input
                            class="text-lg outline-none py-3"
                            name="discount"
                            type="radio"
                            value="0"
                            @if ($product->discount === 0)
                                checked
                            @endif
                        />
                    </div>
                    <div>
                        <label class="font-bold mb-1" for='discount'>Disable offer</label>
                        <input
                            class="text-lg outline-none py-3"
                            name="discount"
                            type="radio"
                            value="1"
                            @if ($product->discount === 1)
                                checked
                            @endif
                        />
                    </div>
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='ref'>Reference</label>
                    <input class="text-lg outline-none py-3" name="ref" type="text" value="{{ $product->ref }}" placeholder="{{ $product->ref }}"  />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='category_id'>Category</label>
                        <select class="form-select block w-full p-3 rounded-lg"  name="category_id">
                        <option selected disabled >Select an option</option>
                          @foreach ($categories as $id => $gender)
                            <option
                                {{
                                    (!is_null($product->category) and $product->category->id == $id)
                                        ? 'selected' 
                                        : ''
                                }}
                                value="{{ $id }}"
                            >{{ $gender }}
                            </option>
                          @endforeach
                        </select>
                </fieldset>
            </div>
        </div>
        <div class="flex-auto flex gap-6">
            <button class="w-1/2 p-3 flex items-center justify-center rounded-md bg-black text-white" type="submit">Edit</button>
            <a href="{{ route('products.index') }}" class="w-1/2 p-3 flex items-center justify-center rounded-md border border-gray-300" >Cancel</a>
        </div>
    </form>
@endsection
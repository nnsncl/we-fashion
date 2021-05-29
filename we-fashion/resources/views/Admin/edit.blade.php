@extends('layouts.master')

@section('content')

    <div class="w-100 mb-16 " >
        <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Edit product.</h1>
    </div>
    <form
        class="border-2 border-gray-100 p-6 bg-white rounded-xl w-100 mt-3 mb-3"
        action="{{ route('products.update', $product->id ) }}"
        method="POST"
    >
        @csrf
        @method('PUT')
        <div class="flex flex-col-reverse md:flex-row justify-between flex-wrap items-start gap-6" >
            <div class="w-full md:w-1/2 flex justify-between flex-col mb-5" >
                <fieldset class="flex flex-col mb-3 ">
                    <label class="font-bold mb-1" for='name'>Name</label>
                    <input
                        class="text-lg outline-none py-3"
                        type="text"
                        name='name'
                        value="{{ $product->name }}"
                        placeholder="{{ $product->name }}"
                    />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='description'>Description</label>
                    <input
                        class="text-lg outline-none py-3"
                        type="text"
                        name='description'
                        value="{{ $product->description }}"
                        placeholder="{{ $product->description }}"
                    />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='price'>Price</label>
                    <input
                        class="text-lg outline-none py-3"
                        name='price'
                        type='number'
                        value="{{ $product->price }}"
                        placeholder="{{ $product->price }}"
                    />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label for='sizes[]' class="font-bold mb-1">Available sizes</label>
                    <div class="flex gap-6">
                        @foreach ($sizes as $id => $size)
                        <span class="w-full md:w-12 flex gap-3 items-center" >
                            <label for='sizes[]' class="font-light text-sm">{{ $size }}</label>
                            <input
                                class="text-lg outline-none py-3"
                                {{-- Change into array on blob --}}
                                name="sizes[]" 
                                type="checkbox"
                                value="{{ $id }}"
                                @if (is_null($product->sizes) == false and in_array(
                                        $id, $product
                                            ->sizes()
                                            ->pluck('id')
                                            ->all() ))
                                    checked
                                @endif
                            />      
                        </span>
                        @endforeach
                    </div>
                </fieldset>
                <fieldset class="mb-3">
                    <label for='published' class="font-bold">Visibility</label>
                    <div class="flex gap-6 mt-1">
                        <span>
                            <label class="font-light" for='published'>Public</label>
                            <input
                                class="text-lg outline-none py-3"
                                name="published"
                                type="radio"
                                value="0"
                                @if ($product->published === 0)
                                    checked
                                @endif
                            />
                        </span>
                        <span>
                            <label class="font-light" for='published'>Private</label>
                            <input
                                class="text-lg outline-none py-3"
                                name="published"
                                type="radio"
                                value="1"
                                @if ($product->published === 1)
                                    checked
                                @endif
                            />
                        </span>
                    </div>
                </fieldset>
                <fieldset class="mb-3">
                    <label for='published' class="font-bold">Offer</label>
                    <div class="flex gap-6 mt-1">
                        <span>
                            <label class="font-light" for='published'>Active</label>
                            <input
                                class="text-lg outline-none py-3"
                                name="discount"
                                type="radio"
                                value="0"
                                @if ($product->discount === 0)
                                    checked
                                @endif
                            />
                        </span>
                        <span>
                            <label class="font-light" for='published'>Disabled</label>
                            <input
                                class="text-lg outline-none py-3"
                                name="discount"
                                type="radio"
                                value="1"
                                @if ($product->discount === 1)
                                    checked
                                @endif
                            />
                        </span>
                    </div>
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='ref'>Reference</label>
                    <input
                        class="text-lg outline-none py-3"
                        name="ref"
                        type="text"
                        value="{{ $product->ref }}"
                        placeholder="{{ $product->ref }}"
                    />
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
                <div class="flex-auto flex gap-6  mt-9">
                    <button class="w-1/2 p-3 flex items-center justify-center rounded-md bg-black text-white" type="submit">Edit</button>
                    <a href="{{ route('products.index') }}" class="w-1/2 p-3 flex items-center justify-center rounded-md border border-gray-300" >Cancel</a>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-0 md:p-6" >
                <img
                    class="rounded-3xl"
                    src="{{ asset($product->image->link) }}"
                    alt={{ $product->name }}
                />
            </div>
        </div>

        
    </form>
@endsection
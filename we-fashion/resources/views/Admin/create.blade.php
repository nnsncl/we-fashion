@extends('layouts.master')

@section('content')
    <div class="w-100 mb-16 " >
        <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Add a new product.</h1>
    </div>
    <form
        class="border-2 border-gray-100 p-6 bg-white rounded-xl w-100 mt-3 mb-3"
        action="{{ route('products.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        <div class="flex flex-col-reverse md:flex-row  justify-between flex-wrap items-start gap-3" >
            <div class="w-full md:w-1/2 flex justify-between flex-col mb-5" >
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
                    <label for='sizes[]' class="font-bold mb-1">Available sizes</label>
                    <div class="flex gap-6">
                        @foreach ($sizes as $id => $size)
                        <span class="w-full md:w-12 flex gap-3 items-center" >
                            <label for='sizes[]' class="font-bold mb-1">{{ $size }}</label>
                            <input
                                class="text-lg outline-none py-3"
                                name="sizes[]"
                                type="checkbox"
                                value="{{ $id }}"
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
                            @if (old('published') === 0)
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
                            value="0"
                            @if (old('published') === 1)
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
                            @if (old('discount') === 0)
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
                            @if (old('discount') === 1)
                                checked
                            @endif
                        />
                    </span>
                </div>
            </fieldset>

                
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='ref'>Reference</label>
                    <input class="text-lg outline-none py-3" name='ref' placeholder="Product reference" />
                </fieldset>
                <fieldset class="flex flex-col mb-3">
                    <label class="font-bold mb-1" for='category_id'>Category</label>
                        <select class="form-select block w-full p-3 rounded-lg"  name="category_id">
                        <option selected disabled >Select an option</option>
                          @foreach ($categories as $id => $gender)
                            <option
                                {{
                                    old("category_id") == $id
                                        ? 'selected'
                                        : ''
                                }}
                                value="{{ $id }}"
                            >{{ $gender }}</option>
                          @endforeach
                        </select>
                </fieldset>
            </div>
            <div class="w-full md:w-1/3" >
                <fieldset class="flex flex-col mb-3 ">
                    <label class="font-bold mb-1" for='image'>Image</label>
                    <input
                        class="text-lg outline-none py-3"
                        type="file"
                        name='image'
                    />
                </fieldset>
            </div>
        </div>
        <div class="flex-auto flex gap-6">
            <button class="w-1/2 p-3 flex items-center justify-center rounded-md bg-black text-white" type="submit">Create</button>
            <a href="{{ route('products.index') }}" class="w-1/2 p-3 flex items-center justify-center rounded-md border border-gray-300" >Cancel</a>
        </div>
    </form>
@endsection
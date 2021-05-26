@extends('layouts.app')

@section('content')
    {{-- {{ dd($products) }} --}}

    {{-- "id" => 1
    "name" => "Kyle Heller"
    "description" => "Assumenda dolor sed minus sunt quisquam. Occaecati suscipit debitis illo doloribus. Tempore culpa facilis sit qui quisquam ipsum. Ullam harum laboriosam nihil d ▶"
    "price" => 5.94
    "size" => "L"
    "published" => 0
    "discount" => 1
    "ref" => "9t7kZ8P4cGDGkXOp"
    "category_id" => 2 --}}
    <div class="w-100 mb-16 " >
        <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Administration</h1>
    </div>
    {{ $products->links() }}
    @foreach ($products as $product)
        <form class="border-2 border-gray-100 p-6 bg-white rounded-xl w-100 mt-3 mb-3" action="">
            <div class="flex flex-col-reverse md:flex-row justify-between flex-wrap items-start gap-3" >
                <div class="w-full md:w-1/2 flex justify-between flex-col mb-5" >
                    <fieldset class="flex flex-col mb-3 ">
                        <label class="font-bold mb-1" for='name'>Name</label>
                        <input class="text-lg outline-none py-3" name='name' value placeholder="{{ $product->name }}" />
                    </fieldset>
                    <fieldset class="flex flex-col mb-3">
                        <label class="font-bold mb-1" for='name'>Description</label>
                        <textarea class="text-lg outline-none py-3" name='name'>{{ $product->description }}</textarea>
                    </fieldset>
                    <fieldset class="flex flex-col mb-3">
                        <label class="font-bold mb-1" for='name'>Price</label>
                        <input class="text-lg outline-none py-3" name='name' value placeholder="{{ $product->price }}" />
                    </fieldset>
                    <fieldset class="flex flex-col mb-3">
                        <label class="font-bold mb-1" for='name'>Size</label>
                        <input class="text-lg outline-none py-3" name='name' value placeholder="{{ $product->size }}" />
                    </fieldset>
                    <fieldset class="flex flex-col mb-3">
                        <label class="font-bold mb-1" for='name'>Published</label>
                        <input class="text-lg outline-none py-3" name='name' value placeholder="{{ $product->published }}" />
                    </fieldset>
                    <fieldset class="flex flex-col mb-3">
                        <label class="font-bold mb-1" for='name'>Discount</label>
                        <input class="text-lg outline-none py-3" name='name' value placeholder="{{ $product->discount }}" />
                    </fieldset>
                    <fieldset class="flex flex-col mb-3">
                        <label class="font-bold mb-1" for='name'>Reference</label>
                        <input class="text-lg outline-none py-3" name='name' value placeholder="{{ $product->ref }}" />
                    </fieldset>
                    <fieldset class="flex flex-col mb-3">
                        <label class="font-bold mb-1" for='name'>Category</label>
                        <input class="text-lg outline-none py-3" name='name' value placeholder="{{ $product->category_id }}" />
                    </fieldset>
                    <fieldset class="flex flex-col mb-3">
                        <label class="font-bold mb-1" for='name'>Image</label>
                        <input class="text-lg outline-none py-3" name='name' value placeholder="image url" />
                    </fieldset>
                </div>
                <fieldset class="w-100  md:w-1/3" >
                    <img class=" w-100 rounded-3xl" src="https://content.asos-media.com/-/media/images/articles/men/2019/02/22-fri/how-asos-does-new-season-denim/mw-asos-style-feed-staff-style-denim-01.jpg?h=1100&w=870&la=fr-FR&hash=7B8220F6CF8523ADAC864F06AF84411B" alt={{ $product->name }}>
                </fieldset>
            </div>
            <div class="flex gap-6" >
                <button class="py-2 px-5 bg-blue-600 rounded-lg text-white" >Edit</button>
                <button class="py-2 px-5 bg-red-600 rounded-lg text-white" >Delete</button>
            </div>
        </form>
    @endforeach
    {{ $products->links() }}
@endsection
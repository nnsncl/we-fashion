@extends('layouts.master')

@section('content')
    <section class="m-auto w-full " >
        <div class="w-100 text-center mb-24" >
            <h1 class="text-xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight mb-4" >
                50% off sale styles with code:<hr class="border-none my-2" /><span class="bg-green-300 text-5xl text-white px-2" >SAVE50</span>
            </h1>
            <p class="font-bold uppercase text-sm">{{ count($discount_products) }} products</p>
        </div>
        <div class="flex items-start justify-center flex-wrap gap-12 md:gap-32" >
            @foreach ($discount_products as $discount_product)
                <article class="w-full md:w-4/12 ">
                    <header
                        style="max-height: 620px;"
                        class="mb-5 flex justify-center items-start overflow-hidden rounded-3xl">
                        <img
                            style="min-height:620px; max-width:none; "
                            class=" w-full md:w-auto"
                            src="{{ asset($discount_product->image->link) }}"
                            alt={{ $discount_product->name }} />
                    </header>
                    <span class="text-gray-400 line-through mb-1 font-bold text-lg uppercase eading-none align-baseline">
                        {{ $discount_product->price }}&nbsp;€
                    </span>
                    <span class="mb-1 font-bold text-lg uppercase eading-none align-baseline">
                        {{  (50 / 100) * ($discount_product->price) }}&nbsp;€
                    </span>
                    <p class="font-bold uppercase text-3xl mb-5">{{ $discount_product->name }}</p>
                    <p class="text-sm mb-5">{{ $discount_product->description }}</p>
                    <a href='/details/{{ $discount_product->id }}' class="text-base font-medium rounded-lg p-3 bg-gray-200 text-black">Product details</a>
                </article>
            @endforeach
        </div>
        <div class="w-100 text-center my-16 " >
            {{ $discount_products->links() }}
        </div>
</section>
@endsection


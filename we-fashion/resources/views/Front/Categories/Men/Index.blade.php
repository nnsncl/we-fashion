@extends('layouts.master')

@section('content')
    <section class="m-auto w-full " >
        <div class="w-100 text-center mb-32 " >
            <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Last men trends.</h1>
        </div>
        <div class="flex items-start justify-center flex-wrap gap-12 md:gap-32" >
            @foreach ($men_products as $men_product)
                <article class="w-full md:w-4/12 ">
                    <header
                    style="max-height: 620px;"
                    class="mb-5 flex justify-center items-start overflow-hidden rounded-3xl">
                        <img
                            style="min-height:620px; max-width:none; "
                            class=" w-full md:w-auto"
                            src="{{ asset($men_product->image->link) }}"
                            alt={{ $men_product->name }} />
                    </header>
                    <span class="text-gray-400 line-through mb-1 font-bold text-lg uppercase eading-none align-baseline">
                        {{ $men_product->price }}&nbsp;€
                    </span>
                    <span class="mb-1 font-bold text-lg uppercase eading-none align-baseline">
                        {{  (50 / 100) * ($men_product->price) }}&nbsp;€
                    </span>
                    <p class="font-bold uppercase text-3xl mb-5">{{ $men_product->name }}</p>
                    <p class="text-sm mb-5">{{ $men_product->description }}</p>
                    <a href='/details/{{ $men_product->id }}' class="text-base font-medium rounded-lg p-3 bg-gray-200 text-black">Product details</a>
                </article>
            @endforeach
        </div>
        <div class="w-100 text-center my-16 " >
            {{ $men_products->links() }}
        </div>
</section>
@endsection


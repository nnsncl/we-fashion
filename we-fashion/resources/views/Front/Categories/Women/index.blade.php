@extends('layouts.master')

@section('content')
    <section class="m-auto w-full " >
        <div class="w-100 text-center mb-24 flex flex-col items-center justify-center" >
            <h1 class="text-xl sm:text-3xl lg:text-4xl leading-none font-extrabold text-gray-900 tracking-tight mb-4" >
                Women's New in
            </h1>
            <p class="font-medium text-sm mb-4 w-100 md:w-1/2">Looking for something new? Discover emerging trends,<br/>the latest clothing for men and the freshest new fits with our WEFASHION New In page.</p>
            <p class="font-bold uppercase text-sm">{{ count($women_products) }} products</p>
        </div>
        <div class="flex items-start justify-center flex-wrap gap-12 md:gap-32" >
            @foreach ($women_products as $women_product)
                <article class="w-full md:w-4/12 ">
                    <header
                    style="max-height: 620px;"
                    class="mb-5 flex justify-center items-start overflow-hidden rounded-3xl">
                        <img
                            style="min-height:620px; max-width:none; "
                            class=" w-full md:w-auto"
                            src="{{ asset($women_product->image->link) }}"
                            alt={{ $women_product->name }} />
                    </header>
                    <span class="text-gray-400 line-through mb-1 font-bold text-lg uppercase eading-none align-baseline">
                        {{ $women_product->price }}&nbsp;€
                    </span>
                    <span class="mb-1 font-bold text-lg uppercase eading-none align-baseline">
                        {{  (50 / 100) * ($women_product->price) }}&nbsp;€
                    </span>
                    <p class="font-bold uppercase text-3xl mb-5">{{ $women_product->name }}</p>
                    <p class="text-sm mb-5">{{ $women_product->description }}</p>
                    <a href='/details/{{ $women_product->id }}' class="text-base font-medium rounded-lg p-3 bg-gray-200 text-black">Product details</a>
                </article>
            @endforeach
        </div>
        <div class="w-100 text-center my-16 " >
            {{ $women_products->links() }}
        </div>
</section>
@endsection


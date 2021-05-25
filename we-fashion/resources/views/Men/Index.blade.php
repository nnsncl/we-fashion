@extends('layouts.app')

@section('content')
    <section class="m-auto w-full " >
        <div class="w-100 text-center mb-32 " >
            <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Last men trends.</h1>
        </div>
        <div class="flex items-start justify-center flex-wrap gap-12 md:gap-32" >
            @foreach ($men_products as $men_product)
                <article class="w-full md:w-4/12 ">
                    <header class="mb-5" >
                        <img
                            class="w-100 rounded-3xl"
                            src="https://content.asos-media.com/-/media/images/articles/men/2019/02/22-fri/how-asos-does-new-season-denim/mw-asos-style-feed-staff-style-denim-01.jpg?h=1100&w=870&la=fr-FR&hash=7B8220F6CF8523ADAC864F06AF84411B"
                            alt={{ $men_product->name }}
                        />
                    </header>
                    <span class="text-gray-400 line-through mb-1 font-bold text-lg uppercase eading-none align-baseline">
                        {{ $men_product->price }}&nbsp;€
                    </span>
                    <span class="mb-1 font-bold text-lg uppercase eading-none align-baseline">
                        {{  (50 / 100) * ($men_product->price) }}&nbsp;€
                    </span>
                    <p class="font-bold uppercase text-3xl mb-5">{{ $men_product->name }}</p>
                    <p class="text-sm mb-5">{{ $men_product->description }}</p>
                    <button class="text-base font-medium rounded-lg p-3 bg-gray-200 text-black">Product details</button>
                </article>
            @endforeach
        </div>
</section>
@endsection


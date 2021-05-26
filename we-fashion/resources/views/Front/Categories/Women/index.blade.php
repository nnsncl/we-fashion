@extends('layouts.master')

@section('content')
    <section class="m-auto w-full " >
        <div class="w-100 text-center mb-32 " >
            <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Last women trends.</h1>
        </div>
        <div class="flex items-start justify-center flex-wrap gap-12 md:gap-32" >
            @foreach ($women_products as $women_product)
                <article class="w-full md:w-4/12 ">
                    <header class="mb-5 relative" >
                        <img
                            class="w-100 rounded-3xl"
                            src="https://content.asos-media.com/-/media/images/articles/men/2019/02/22-fri/how-asos-does-new-season-denim/mw-asos-style-feed-staff-style-denim-01.jpg?h=1100&w=870&la=fr-FR&hash=7B8220F6CF8523ADAC864F06AF84411B"
                            alt={{ $women_product->name }}
                        />
                        <div class="absolute z-10 top-0 right-0 px-3 py-2 m-5 rounded-xl text-white text-bold bg-gradient-to-br from-yellow-400 via-red-500 to-pink-500 " >♀</div>
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
</section>
@endsection


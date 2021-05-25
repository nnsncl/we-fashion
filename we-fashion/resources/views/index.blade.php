@extends('layouts.app')

@section('content')
    <section class="m-auto w-full " >
        <div class="w-100 text-center mb-32 " >
            <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Nab your Holiday looks,<br/>night-out 'fits & more.</h1>
        </div>
        <div class="flex items-start justify-center flex-wrap gap-12 md:gap-32" >
            @foreach ($products as $product)
                    <div class="w-full md:w-4/12 ">
                        <div class="mb-5" >
                            <img class="w-100 rounded-3xl" src="https://content.asos-media.com/-/media/images/articles/men/2019/02/22-fri/how-asos-does-new-season-denim/mw-asos-style-feed-staff-style-denim-01.jpg?h=1100&w=870&la=fr-FR&hash=7B8220F6CF8523ADAC864F06AF84411B" alt={{ $product->name }}>
                        </div>
                        <div class="mb-10">
                            <p class="mb-1 font-bold text-lg uppercase eading-none align-baseline">
                                {{ $product->price }}&nbsp;€
                            </p>
                            <h1 class="font-bold uppercase text-3xl mb-5">{{ $product->name }}</h1>
                            <p class="text-sm mb-5">{{ $product->description }}</p>
                            <button class="text-base font-medium rounded-lg p-3 bg-gray-200 text-black">Product details</button>
                        </div>
                    </div>
            @endforeach
        </div>
</section>
@endsection


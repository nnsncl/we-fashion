@extends('layouts.app')

@section('content')
    <section class="m-auto w-full " >
        <div class="w-100 text-center mb-16 " >
            <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Nab your Holiday looks,<br/>night-out 'fits & more.</h1>
        </div>
        <div class="text-center bg-white rounded-xl py-9 mb-16" >
            <p class="font-bold uppercase text-md">{{ count($products) }} products found</p>
        </div>
        <div class="flex items-start justify-center flex-wrap gap-12 md:gap-32" >    
            @foreach ($products as $product)
                <article class="w-full md:w-4/12 ">
                    <header class="mb-5 relative " >
                        <img class=" w-100 rounded-3xl" src="https://content.asos-media.com/-/media/images/articles/men/2019/02/22-fri/how-asos-does-new-season-denim/mw-asos-style-feed-staff-style-denim-01.jpg?h=1100&w=870&la=fr-FR&hash=7B8220F6CF8523ADAC864F06AF84411B" alt={{ $product->name }}>
                        <div class="absolute z-10 top-0 right-0 px-3 py-2 m-5 rounded-xl text-white text-bold bg-gradient-to-br from-yellow-400 via-red-500 to-pink-500 " >
                            {{  $product->gender === 'male'
                                    ? '♂'
                                    : '♀'
                            }}
                        </div>
                    </header>
                    <div class="mb-2" >
                        <span class="text-gray-400 line-through font-bold text-lg uppercase eading-none align-baseline">
                            {{ $product->discount
                                ? $product->price
                                : null
                            }}
                        </span>
                        <span class="font-bold text-lg uppercase eading-none align-baseline">
                            {{ $product->discount
                                ? (50 / 100) * ($product->price)
                                : $product->price
                            }}&nbsp;€
                        </span>
                    </div>
                        <p class="font-bold uppercase text-3xl mb-5">{{ $product->name }}</p>
                        <p class="text-sm mb-5">{{ $product->description }}</p>
                        <a href='/details/{{ $product->id }}' class="text-base font-medium rounded-lg p-3 bg-gray-200 text-black">Product details</a>
                    </article>
            @endforeach
        </div>
        <div class="w-100 text-center my-16 " >
            {{ $products->links() }}
        </div>
</section>
@endsection


@extends('layouts.master')

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
                    <header
                        style="max-height: 620px;"
                        class="mb-5 flex justify-center items-start overflow-hidden rounded-3xl">
                        <img
                            style="min-height:620px; max-width:none; "
                            class=" w-full md:w-auto"
                            src="{{ asset($product->image->link) }}"
                            alt={{ $product->name }} />
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


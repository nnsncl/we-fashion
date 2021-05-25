@extends('layouts.app')

@section('content')
    <section class="m-auto py-24" >
        <div class="w-5/6 py-10" >
            @foreach ($products as $product)
                <div class="m-auto" >
                    <span class="uppercase text-blue-500 text-xs">{{ $product->price }}€</span>
                        <h2 class="text-gray-700 text-5xl" >{{ $product->name }}</h2>
                        <p class="text-lg text-gray-700 py-6" >{{ $product->description }}</p>
                        <hr class="mt-4 mb-8" />
                </div>
            @endforeach
        </div>
</section>
@endsection


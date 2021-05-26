@extends('layouts.master')

@section('content')
    <section class="m-auto flex justify-center items-center flex-wrap  gap-6 " >
        <div class="mb-5 w-full md:w-1/2" >
            <img
                class="rounded-3xl"
                src="https://content.asos-media.com/-/media/images/articles/men/2019/02/22-fri/how-asos-does-new-season-denim/mw-asos-style-feed-staff-style-denim-01.jpg?h=1100&w=870&la=fr-FR&hash=7B8220F6CF8523ADAC864F06AF84411B"
                alt={{ $details->name }}
            />
        </div>
        <div class="w-full md:w-1/3"  >
            <p class="font-bold uppercase text-3xl mb-5">{{ $details->name }}</p>
            <p class="text-sm mb-5">{{ $details->description }}</p>
            <p class="text-sm mb-5"><b>Gender</b>:
            {{ $details->category_id === 1
                ? 'Women'
                : 'Men'
            }}
            </p>
            <p class="text-sm mb-5"><b>Product reference</b>: {{ $details->ref }}</p>
            <p class="mb-5" >
                <span class="text-gray-400 line-through font-bold text-lg uppercase eading-none align-baseline">
                    {{ $details->price }}&nbsp;€
                </span>
                <span class="font-bold text-lg uppercase eading-none align-baseline">
                    {{  (50 / 100) * ($details->price) }}&nbsp;€
                </span>
            </p>
            <label class="block mb-9">
                <span class="text-gray-900 mb-2">Size</span>
                <select class="form-select block w-full p-3 rounded-lg">
                  <option value="">--Select a size--</option>
                  <option disabled >XS</option>
                  <option disabled >S</option>
                  <option disabled >M</option>
                  <option >{{ $details->size }}</option>
                  <option disabled >XL</option>
                </select>
              </label>
            <a href="/products" class="text-base font-medium rounded-lg p-3 bg-blue-600 text-white">Add to cart</a>
        </div>
    </section>
@endsection


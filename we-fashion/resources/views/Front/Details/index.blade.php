@extends('layouts.master')

@section('content')
    <section class="m-auto flex justify-center items-center flex-wrap  gap-6 " >
        <div class="mb-5 w-full md:w-1/2" >
            <img
                class="rounded-3xl"
                src="{{ asset($details->image->link) }}"
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
            <div class="mb-9" >
                <label class="font-bold mb-1">Size</label>
                <select class="form-select block w-full p-3 rounded-lg">
                  <option selected disabled>--Select a size--</option>
                  @foreach ($details->sizes as $size)
                    <option value={{ $size->value }} >{{ $size->value }}</option>                    
                  @endforeach
                </select>
            </div>
                
              
            <a href="{{ route('index') }}" class="text-base font-medium rounded-lg p-3 bg-blue-600 text-white">Add to cart</a>
        </div>
    </section>
@endsection


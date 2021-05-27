@extends('layouts.master')

@if(Auth::user())
  @section('content')
    <div class="mb-16" >
        <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-3" >Hello,&nbsp;{{ Auth::user()->name }}</h1>
        <a href="{{ route('products.create') }}" class="w-full sm:w-80 px-6 py-3 flex items-center justify-center rounded-md bg-gray-900 text-white">Add a new product&nbsp;&rarr;</a>
    </div>
    {{ $administration->links() }}
    <div class="my-6 flex items-start justify-between flex-wrap gap-6" >
      @foreach ($administration as $admin)
        <div class="flex w-full lg:w-5/12">
          <div class="flex-none w-44 relative">
            <img src="https://content.asos-media.com/-/media/images/articles/men/2019/02/22-fri/how-asos-does-new-season-denim/mw-asos-style-feed-staff-style-denim-01.jpg?h=1100&w=870&la=fr-FR&hash=7B8220F6CF8523ADAC864F06AF84411B" alt="" class="h-full max-h-80 rounded-2xl absolute inset-0 w-full object-cover" />
          </div>
          <div class="flex-auto p-6">
            <div class="flex flex-wrap mb-9">
              <p class="flex-auto text-xl font-semibold">{{ $admin->name }}</p>
              <p class="text-xl font-semibold text-gray-500">
                  {{ $admin->discount
                      ? (50 / 100) * ($admin->price)
                      : $admin->price
                  }}&nbsp;€
              </p>
            </div>
            <div class="mb-9">
              <p class="font-bold" >Reference:</p>
              <p class="text-lg" >{{ $admin->ref }}</p>
              <hr class="my-4" />
              <p class="font-bold" >Discount:</p>
              <p class="text-lg" >
                  {{ $admin->discount
                      ? 'None'
                      : '-20%'
                  }}
              </p>
            </div>
            <div class="flex-auto flex gap-6">
              <a href='{{ route('products.edit', $admin->id ) }}' class="w-1/2 p-3 flex items-center justify-center rounded-lg bg-gray-900 text-white" >Edit</a>
              <form class="w-1/2" action="{{ route('products.destroy', $admin->id ) }}" method='POST' >
                @csrf
                @method('delete')
                <button class="w-full p-3 flex items-center justify-center rounded-lg border border-gray-300" type="sumnit">Delete</button>              
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{ $administration->links() }}
  @endsection
@endif


@extends('layouts.master')

  @section('content')
    <div class="mb-16" >
        <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-3" >Categories manager</h1>
        <a href="{{ route('categories.create') }}" class="w-full sm:w-80 px-6 py-3 flex items-center justify-center rounded-md bg-gray-900 text-white">Add a new category&nbsp;&rarr;</a>
    </div>
      @foreach ($categories as $category)
      <div class="bg-white rounded-xl flex flew-wrap justify-between items-center w-full gap-6 p-6 mb-6 border-2 border-gray-200" >
        <div class="w-2/12" >
          <p class="font-bold" >Name:</p>
          <p class="flex-auto text-xl capitalize">{{ $category->gender }}</p>
        </div>
        <div class="w-2/12" >
          <p class="font-bold" >Id:</p>
          <p class="flex-auto text-xl capitalize">{{ $category->id }}</p>
        </div>
        <div class="w-8/12 flex gap-6 justify-end" >
          <a href='{{ route('categories.edit', $category->id ) }}' class="py-3 px-6 flex items-center justify-center rounded-lg bg-gray-900 text-white" >Edit</a>
          <form action="{{ route('categories.destroy', $category->id ) }}" method='POST' >
            @csrf
            @method('delete')
            <button class="w-full p-3 flex items-center justify-center rounded-lg border border-gray-300" type="sumnit">Delete</button>              
          </form>
        </div>
      </div>
      @endforeach
  @endsection


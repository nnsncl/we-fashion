@extends('layouts.master')

@section('content')
    <div class="w-100 mb-16 " >
        <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8" >Add a new category.</h1>
    </div>
    <form class="border-2 border-gray-100 p-6 bg-white rounded-xl w-100 mt-3 mb-3" action="{{ route('categories.store') }}" method="POST" >
        @csrf
        <div class="flex flex-col-reverse md:flex-row justify-between flex-wrap items-start gap-3" >
            <div class="w-full flex justify-between flex-col mb-5" >
                <fieldset class="flex flex-col mb-3 ">
                    <label class="font-bold mb-1" for='gender'>Gender</label>
                    <input class="text-lg outline-none py-3" name='gender' placeholder="Gender name" />
                </fieldset>
            </div>
        </div>
        <div class="flex-auto flex gap-6">
            <button class="w-1/2 p-3 flex items-center justify-center rounded-md bg-black text-white" type="submit">Create</button>
            <a href="{{ route('categories.index') }}" class="w-1/2 p-3 flex items-center justify-center rounded-md border border-gray-300" >Cancel</a>
        </div>
    </form>
@endsection
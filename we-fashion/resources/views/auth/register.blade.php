@extends('layouts.master')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <section class="flex flex-col break-words bg-white rounded-3xl p-6 gap-6">
        <header class="text-xl sm:text-3xl lg:text-4xl leading-none font-extrabold text-gray-900 tracking-tight mb-4" >
            {{ __('Register') }}
        </header>

        <form class="flex flex-col gap-6 w-full" method="POST"
            action="{{ route('register') }}">
            @csrf

            <div class="flex flex-wrap">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('Name') }}:
                </label>

                <input
                    id="name"
                    type="text"
                    class="form-input w-full @error('name')  border-red-500 @enderror"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autocomplete="name"
                    autofocus
                    placeholder="Name"
                />

                @error('name')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('E-Mail Address') }}:
                </label>
                <input 
                    d="email"
                    type="email"
                    placeholder="Email"
                    class="form-input w-full @error('email') border-red-500 @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                />

                @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('Password') }}:
                </label>

                <input
                    id="password"
                    type="password"
                    class="form-input w-full @error('password') border-red-500 @enderror"
                    name="password"
                    required
                    autocomplete="new-password"
                    placeholder='••••••••'
                />

                @error('password')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('Confirm Password') }}:
                </label>
                <input
                    id="password-confirm"
                    type="password"
                    class="form-input w-full"
                    name="password_confirmation"
                    placeholder='••••••••'
                    required autocomplete="new-password"
                />
            </div>

            <div class="gap-9 flex flex-wrap">
                <button
                    type="submit"
                    class="w-full rounded-md bg-black text-white  p-3">
                    {{ __('Register') }}
                </button>

                <p class="w-full text-xs text-center text-gray-700 sm:text-sm">
                    {{ __('Already have an account?') }}
                    <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </p>
            </div>
        </form>

    </section>
</main>
@endsection

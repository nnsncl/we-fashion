<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>We Fasion</title>
</head>
<body class="bg-gradient-to-r from-white to-gray-200 m-auto w-4/5" >
    <nav class="border-b border-gray-200 py-4 px-4 flex items-center justify-between mb-16">
        <div class="flex items-center gap-5" >
            <a href="{{ route('index') }}" style="color:#66EB9A;" class="text-md font-bold" >WF</a>
            <a class="text-sm font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="/discount">Offers</a>
            @foreach ($categories as $category_link)
                <a href="/{{ $category_link }}"
                   class="capitalize text-sm font-medium hover:text-gray-600 transition-colors duration-200 py-2">
                {{ $category_link }}
                </a>
            @endforeach
        </div>
        <div class="flex items-center flex-wrap gap-5" >
            @guest
                <a href="{{ route('login') }}">
                    <svg fill="black"  width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10,17.25V14H3V10H10V6.75L15.25,12L10,17.25M8,2H17C18.1,2 19,2.9 19,4V20C19,21.1 18.1,22 17,22H8C6.9,22 6,21.1 6,20V16H8V20H17V4H8V8H6V4C6,2.9 6.9,2 8,2Z" />
                    </svg>    
                </a>
                @else
                <a class="text-sm font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="/admin/products">Admin</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <path d="M17,17.25V14H10V10H17V6.75L22.25,12L17,17.25M13,2C14.1,2 15,2.9 15,4V8H13V4H4V20H13V16H15V20C15,21.1 14.1,22 13,22H4C2.9,22 2,21.1 2,20V4C2,2.9 2.9,2 4,2H13Z" />
                    </svg>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            @endguest
        </div>
    </nav>
    @yield('content')
    <footer class="border-t border-gray-200 py-4 px-4 flex items-center justify-between my-16">
        <ul>
            <li>
                <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Legal</a>
            </li>
            <li>
                <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Press</a>
            </li>
            <li>
                <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Fabrication</a>
            </li>
        </ul>
        <ul>
            <li>
                <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Contact us</a>
            </li>
            <li>
                <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Shiping details</a>
            </li>
            <li>
                <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">CGV</a>
            </li>
        </ul>
        <ul>
            <li>
                <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Facebook<i class="pl-3 fa fa-facebook "></i></a>
            </li>
            <li>
                <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Instagram<i class="pl-3 fa fa-instagram"></i></a>
            </li>
            <li>
                <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Newsletter</a>
            </li>
        </ul>
    </footer>
</body>
</html>
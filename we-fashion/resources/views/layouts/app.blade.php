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
        <a href="/" class="text-xl font-bold" >Wf.</a>
        <div class="flex items-center space-x-6 sm:space-x-10 ml-6 sm:ml-10" >
            <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2 bg-white p-5 rounded-3xl" href="/discount">Offers</a>
            <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="/men">Men</a>
            <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Women</a>
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
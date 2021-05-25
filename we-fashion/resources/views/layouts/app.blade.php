<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>We Fasion</title>
</head>
<body class="bg-gradient-to-r from-white to-gray-200 m-auto w-4/5" >
    <nav class="border-b border-gray-200 py-4 px-4 flex items-center justify-between mb-16">
        <p class="text-xl font-bold" >Wf.</p>
        <div class="flex items-center space-x-6 sm:space-x-10 ml-6 sm:ml-10" >
            <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2 bg-white p-5 rounded-3xl" href="">Offers</a>
            <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Men</a>
            <a class="text-base leading-6 font-medium hover:text-gray-600 transition-colors duration-200 py-2" href="">Women</a>
        </div>
    </nav>
    @yield('content')
</body>
</html>
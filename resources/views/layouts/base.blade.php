<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>
    <title>
        @hasSection('title')
            @yield('title') | {{env('APP_NAME')}}
        @else
            {{env('APP_NAME')}}
        @endif
    </title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
<header>
    <div class="container px-4 flex justify-between items-center relative min-h-[125px]">
        <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/logo.jpg') }}" alt="Logo" class="w-36 ml-10 my-4">
        
        <!-- Mobil Menü Butonu -->
        <button id="menu-toggle" class="block md:hidden text-gray-700 focus:outline-none">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        
        <!-- Menü -->
        <nav class="hidden md:flex gap-5 justify-center items-center w-full font-medium text-gray-400" id="menu">
            <a href="#" class="menu-link hover:text-[#05cbc8] transition ease-in">     Home</a>
            <a href="#" class="menu-link hover:text-[#05cbc8] transition ease-in">   Find a Physician</a>
            <a href="#" class="menu-link hover:text-[#05cbc8] transition ease-in">     About</a>
            <a href="#" class="menu-link hover:text-[#05cbc8] transition ease-in"> Features</a>
            <a href="#" class="menu-link hover:text-[#05cbc8] transition ease-in">Our Services</a>
            <a href="#" class="menu-link hover:text-[#05cbc8] transition ease-in">Resources</a>
            <a href="#" class="menu-link hover:text-[#05cbc8] transition ease-in">Contact Us</a>
        </nav>
    </div>

    <!-- Mobil Menü İçeriği -->
    <div id="mobile-menu" class="fixed top-[-100%] left-0 w-full h-[80%] bg-white flex flex-col items-center justify-center z-50 transition-all duration-300 shadow-lg pointer-events-none">
        <button id="menu-close" class="absolute top-5 right-5 text-gray-700 text-3xl hover:text-red-600 transition ease-in">&times;</button>
        <a href="#"> <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/logo.jpg') }}" alt="Logo" class="w-36 ml-10 my-4 absolute top-5 left-2"></a>
        <a href="#" class="mobile-menu-link hover:text-[#05cbc8] transition ease-in text-2xl my-2">             Home</a>
            <a href="#" class="mobile-menu-link hover:text-[#05cbc8] transition ease-in text-2xl my-2">Find a Physician</a>
            <a href="#" class="mobile-menu-link hover:text-[#05cbc8] transition ease-in text-2xl my-2">About</a>
            <a href="#" class="mobile-menu-link hover:text-[#05cbc8] transition ease-in text-2xl my-2">        Features</a>
        <a href="#" class="mobile-menu-link hover:text-[#05cbc8] transition ease-in text-2xl my-2">    Our Services</a>
        <a href="#" class="mobile-menu-link hover:text-[#05cbc8] transition ease-in text-2xl my-2">       Resources</a>
        <a href="#" class="mobile-menu-link hover:text-[#05cbc8] transition ease-in text-2xl my-2">      Contact Us</a>
    </div>
</header>


@yield('body')

<footer class="min-h-screen flex flex-col justify-end">
    <!-- Ana Footer Alanı -->
    <div class="h-[524px] bg-[#222D3E] w-full">
        <!-- İç Footer Rengi (Alt Kısım) -->

    </div>
    <div class="h-[70px] bg-[#191F2C] w-full"></div>
</footer>



</body>
</html>

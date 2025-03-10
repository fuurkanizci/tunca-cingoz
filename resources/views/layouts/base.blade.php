<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}">
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
   

<div class="container px-4 flex justify-between items-center">
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/logo.jpg') }}" alt="Logo" class="w-36 ml-10 my-4">
    
    <div class="flex gap-5 justify-center items-center w-full">
        <div><a href="#" class="menu-link hover:text-[#17436d]">home</a></div>
        <div><a href="#" class="menu-link hover:text-violet-600">about</a></div>
        <div><a href="#" class="menu-link hover:text-violet-600">contact</a></div>
        <div><a href="#" class="menu-link hover:text-violet-600">services</a></div>
    </div>
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

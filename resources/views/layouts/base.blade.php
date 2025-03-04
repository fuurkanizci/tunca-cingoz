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
<header class="header flex justify-between items-center p-4 bg-white shadow-md">
    <!-- Sol Köşe: Logo -->
    <a  href="">
        <p class="text-3xl font-extrabold text-black text-start">DR.Tunca Cingöz</p>
    </a>

    <!-- Ortada: Navigasyon -->
    <nav class="nav hidden md:flex space-x-6">
        <a href="#" class="text-gray-700 hover:text-gray-900">Ana Sayfa</a>
        <a href="#" class="text-gray-700 hover:text-gray-900">Hakkımızda</a>
        <a href="#" class="text-gray-700 hover:text-gray-900">Hizmetler</a>
        <a href="#" class="text-gray-700 hover:text-gray-900">İletişim</a>
    </nav>

    <!-- Sağ Köşe - Boş Bırakıldı -->
    <div class="right">
        <!-- Buraya başka içerikler eklenebilir -->
    </div>

    <!-- Mobil Menü Butonu -->
    <!-- Mobil Menü Butonu -->
    <button class="mobile-menu p-2 rounded-md text-gray-700 focus:outline-none md:hidden" id="mobileMenuButton">
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>
</header>

<!-- Mobil Menü -->
<nav class="mobile-nav bg-white shadow-md absolute left-0 right-0 top-16 p-4 md:hidden">
    <a href="#" class="block text-gray-700 hover:text-gray-900">Ana Sayfa</a>
    <a href="#" class="block text-gray-700 hover:text-gray-900">Hakkımızda</a>
    <a href="#" class="block text-gray-700 hover:text-gray-900">Hizmetler</a>
    <a href="#" class="block text-gray-700 hover:text-gray-900">İletişim</a>
</nav>

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

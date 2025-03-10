@extends('layouts.layout')
@section('content')


<div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <div class="swiper-slide relative">
    <!-- Zoom efekti için resim -->
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide1.jpg') }}" alt="Logo" class="slider-zoom">

    <!-- İçerik kısmı -->
    <div class="cont absolute top-0 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
    <p class="select-disable text-left w-full">Return to Normal Activities</p> <!-- Metin sola dayalı -->
    <div class="w-full text-left"> <!-- Linki sola dayalı hale getirdik -->
        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block select-disable">Make an appointment</a>
    </div>
</div>

</div>  <div class="swiper-slide relative">
    <!-- Zoom efekti için resim -->
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide1.jpg') }}" alt="Logo" class="slider-zoom">

    <!-- İçerik kısmı -->
    <div class="cont absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white p-6 slider-elements">
        <p class="select-disable">Return to Normal Activities</p>
        <div>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block select-disable">Make an appointment</a>
        </div>
    </div>
</div>

 
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
@endsection
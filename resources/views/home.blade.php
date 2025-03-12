@extends('layouts.layout')
@section('content')


<div class="swiper mySwiper">
    <div class="swiper-wrapper leading-none">
    <div class="swiper-slide relative ">
    <!-- Zoom efekti için resim -->
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide1.jpg') }}" alt="Logo" class="slider-zoom">

    <!-- İçerik kısmı -->
    <div class="cont absolute top-0 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
    <p class="select-disable text-left w-full">Normal Yaşantına Hızla Geri Dön!</p> <!-- Metin sola dayalı -->
    <div class="w-full text-left mt-20"> <!-- Linki sola dayalı hale getirdik -->
    <a href="#" class="bg-blue-600 text-white px-12 py-7 rounded mt-4 items-start select-disable mr-4  ">Randevu Oluştur<i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4"></i></a>
   
    </div>
</div>

</div> 
 <div class="swiper-slide relative">
    <!-- Zoom efekti için resim -->
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide2.jpg') }}" alt="Logo" class="slider-zoom">

    <!-- İçerik kısmı -->
    <div class="cont absolute top-0 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
        <p class="select-disable">Return to Normal Activities</p>
        <div class="w-full text-left mt-20"> <!-- Linki sola dayalı hale getirdik -->
    <a href="#" class="bg-blue-600 text-white px-12 py-7 rounded mt-4 items-start select-disable mr-4  ">Randevu Oluştur<i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4"></i></a>
   
    
        </div>
    </div>
</div>

<div class="swiper-slide relative">
    <!-- Zoom efekti için resim -->
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide3.jpg') }}" alt="Logo" class="slider-zoom">

    <!-- İçerik kısmı -->
    <div class="cont absolute top-0 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
        <p class="select-disable">Return to Normal Activities</p>
        <div class="w-full text-left mt-20"> <!-- Linki sola dayalı hale getirdik -->
    <a href="#" class="bg-blue-600 text-white px-12 py-7 rounded mt-4 items-start select-disable mr-4  ">Randevu Oluştur<i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4"></i></a>
   
    
        </div>
    </div>
</div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>



<div class="h-[175px] bg-[#191F2C] text-white flex items-center justify-center flex-row gap-12 font-semibold">
    <div class="flex  items-center justify-center text-center gap-2">
        <div class="text-3xl uppercase ">Sprains, strains and pains?</div>
        <div class="text-lg text-gray-500 ">Find an Orthopedic Specialist in Our Clinic</div>
    </div>
    <div>
    <a href="#" class="bg-[#05cbc8]  text-white px-4 py-6 rounded mt-4 items-start select-disable mr-4  ">Destek Asistanımıza Ulaş <i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4"></i></a>
    </div>

</div>
<div class="grid grid-cols-5 max-md:grid-cols-2 gap-1  text-white  ">
  <div class="bg-[#191F2C] mx-2">01</div>
  <div class="bg-[#191F2C] mx-2">02</div>
  <div class="bg-[#191F2C] mx-2">03</div>
  <div class="bg-[#191F2C] mx-2">04</div>
  <div class="bg-[#191F2C] mx-2">05</div>
</div>

@endsection
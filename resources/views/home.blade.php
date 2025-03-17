@extends('layouts.layout')
@section('content')


<div class="swiper mySwiper">
    <div class="swiper-wrapper leading-none">
    <div class="swiper-slide relative ">
    <!-- Zoom efekti için resim -->
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide1.jpg') }}" alt="Logo" class="slider-zoom">

    <!-- İçerik kısmı -->
    <div class="cont absolute top-10  max-sm:top-4 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
    <p class="select-disable text-left w-full">Normal Yaşantına Hızla Geri Dön!</p> <!-- Metin sola dayalı -->
    <div class="w-full text-left mt-20 max-md:mt-4 max-lg:mt-6"> <!-- Linki sola dayalı hale getirdik -->
    <a href="#" class="bg-blue-600 text-white px-12 py-7 max-lg:py-5 max-md:px-8  max-md:py-3 rounded mt-4 items-start select-disable mr-4   max-sm:px-2  max-sm:mr-1 max-sm:text-xs max-sm:py-2 max-sm:w-4">Randevu Oluştur<i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4 max-sm:py-1 max-sm:px-2"></i></a>
   
    </div>
</div>

</div> 
 <div class="swiper-slide relative">
    <!-- Zoom efekti için resim -->
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide2.jpg') }}" alt="Logo" class="slider-zoom">

    <!-- İçerik kısmı -->
     <div class="cont absolute top-10  max-sm:top-4 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
        <p class="select-disable">Return to Normal Activities</p>
        <div class="w-full text-left mt-20"> <!-- Linki sola dayalı hale getirdik -->
    <a href="#" class="bg-blue-600 text-white px-12 py-7 max-md:px-8  max-md:py-3 rounded mt-4 items-start select-disable mr-4  max-sm:text-sm max-sm:px-4 ">Randevu Oluştur<i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4"></i></a>
   
    
        </div>
    </div>
</div>

<div class="swiper-slide relative">
    <!-- Zoom efekti için resim -->
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide3.jpg') }}" alt="Logo" class="slider-zoom">

    <!-- İçerik kısmı -->
     <div class="cont absolute top-10  max-sm:top-4 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
        <p class="select-disable">Return to Normal Activities</p>
        <div class="w-full text-left mt-20"> <!-- Linki sola dayalı hale getirdik -->
   <a href="#" class="bg-blue-600 text-white px-12 py-7 max-md:px-8  max-md:py-3 rounded mt-4 items-start select-disable mr-4  max-sm:text-sm max-sm:px-4 ">Randevu Oluştur<i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4"></i></a>
   
    
        </div>
    </div>
</div>
    </div>
    <div class="swiper-button-next  next-slider"></div>
    <div class="swiper-button-prev "></div>
</div>
<div class="grid grid-cols-3 max-xl:cols-2 max-md:cols-1"></div>
<div class="min-h-[175px] max-md:min-h-30  bg-[#191F2C] text-white flex items-center justify-center flex-row gap-12 font-semibold max-xl:flex-wrap max-md:gap-0 max-lg:text-start max-lg:justify-start">
  <div class="flex items-center justify-center text-center gap-2  max-xl:flex-wrap max-lg:text-start max-lg:justify-start max-lg:ml-3">
    <div class="text-3xl uppercase max-md:text-lg max-sm:text-sm">Sprains, strains and pains?</div>
    <div class="text-lg text-gray-500 max-md:text-base max-sm:text-xs">Find an Orthopedic Specialist in Our Clinic</div>
  </div>
  <div>
    <a href="#" class="bg-[#05cbc8] text-white px-4 py-6 rounded mt-4 items-start select-disable mr-4 max-md:px-2 max-md:py-3 max-lg:ml-3 max-md:text-xs">
   Destek Asistanımıza Ulaş  <i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4 max-md:ml-1"></i>
    </a>
  </div>
</div>

<div class="grid grid-cols-5 max-md:grid-cols-2 max-lg:grid-cols-4 grid-links-settings max-[]: gap-4 bg-stone-100 leading-6  ">
  <!-- Kart 1 -->
  <a href="" class="w-full drop-shadow-lg">
 <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee] relative  mt-4 ">
    <!-- Kartın tamamı için animasyon ekleniyor -->
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10 max-md:drop-shadow-lg  max-md:drop-border  text-white hover-settings group-hover:bg-[#e7ecee]">
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600"></i>
      <p class="font-medium text-xl text-gray-600 ">Fizik Tedavi Hizmetleri</p>
      <p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2 arrow-hidden">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
    <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500 arrow-hidden"></i>
  </div>
</a>
<!-- Kart 2 -->
<a href="" class="w-full drop-shadow-lg">
 <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee] relative  mt-4 ">
    <!-- Kartın tamamı için animasyon ekleniyor -->
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10  text-white hover-settings group-hover:bg-[#e7ecee]">
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600"></i>
      <p class="font-medium text-xl text-gray-600 ">Fizik Tedavi Hizmetleri</p>
      <p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2 arrow-hidden">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
   <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500 arrow-hidden"></i>
  </div>
</a>

<!-- Kart 3 -->
<a href="" class="w-full drop-shadow-lg">
 <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee] relative  mt-4 ">
    <!-- Kartın tamamı için animasyon ekleniyor -->
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10 text-white hover-settings group-hover:bg-[#e7ecee]">
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600"></i>
      <p class="font-medium text-xl text-gray-600 ">Fizik Tedavi Hizmetleri</p>
<p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2 arrow-hidden">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
   <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500 arrow-hidden"></i>
  </div>
</a>
<a href="" class="w-full drop-shadow-lg">
 <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee] relative  mt-4 ">
    <!-- Kartın tamamı için animasyon ekleniyor -->
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10 text-white hover-settings group-hover:bg-[#e7ecee]">
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600"></i>
      <p class="font-medium text-xl text-gray-600 ">Fizik Tedavi Hizmetleri</p>
<p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2 arrow-hidden">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
   <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500 arrow-hidden"></i>
  </div>
</a>
<a href="" class="w-full drop-shadow-lg">
 <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee] relative  mt-4 ">
    <!-- Kartın tamamı için animasyon ekleniyor -->
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10 text-white hover-settings group-hover:bg-[#e7ecee]">
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600"></i>
      <p class="font-medium text-xl text-gray-600 ">Fizik Tedavi Hizmetleri</p>
<p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2 arrow-hidden">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
   <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500 arrow-hidden"></i>
  </div>
</a>

</div>


@endsection 
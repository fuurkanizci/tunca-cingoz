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
    <div class="swiper-button-next  next-slider"></div>
    <div class="swiper-button-prev "></div>
</div>
<div class="min-h-[175px] bg-[#191F2C] text-white flex items-center justify-center flex-row gap-12 font-semibold ">
  <div class="flex items-center justify-center text-center gap-2">
    <div class="text-3xl uppercase">Sprains, strains and pains?</div>
    <div class="text-lg text-gray-500">Find an Orthopedic Specialist in Our Clinic</div>
  </div>
  <div>
    <a href="#" class="bg-[#05cbc8] text-white px-4 py-6 rounded mt-4 items-start select-disable mr-4">
      Destek Asistanımıza Ulaş <i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4"></i>
    </a>
  </div>
</div>

<div class="grid grid-cols-5 max-md:grid-cols-2 max-lg:grid-cols-4 max-sm:grid-cols-1 gap-4 bg-stone-100 leading-6 drop-shadow-lg">
  <!-- Kart 1 -->
   <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee] relative ">
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10 bg-stone-100 text-white hover-settings group-hover:bg-[#e7ecee] ">
      <i class="fa-solid fa-user-doctor text-[95px] mb-2 text-blue-600"></i>
      <a href="" class="font-medium text-xl text-gray-600 ">Bir Uzman Bulun</a>
      <p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2">
        Ortopedi ekibimizin dünyadaki en iyiler arasında olduğuna inanıyoruz ve profesyonellerimiz her bir hastamızla ilgilenmektedir.
      </p>
    </div>
    <a href="" class="">
      <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500"></i>
    </a>
    <!-- Çubuk -->
    <div class="absolute top-1/2 left-0 transform -translate-y-1/2 w-[1px] h-[1rem] bg-gray-500"></div>
  </div>
<!-- Kart 2 -->
<a href="" class="w-full">
  <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee]">
    <!-- Kartın tamamı için animasyon ekleniyor -->
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10 bg-stone-100 text-white hover-settings group-hover:bg-[#e7ecee]">
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600"></i>
      <p class="font-medium text-xl text-gray-600 ">Fizik Tedavi Hizmetleri</p>
      <p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
    <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500"></i>
  </div>
</a>

<!-- Kart 3 -->
<a href="" class="w-full">
  <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee]">
    <!-- Kartın tamamı için animasyon ekleniyor -->
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10 bg-stone-100 text-white hover-settings group-hover:bg-[#e7ecee]">
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600"></i>
      <p class="font-medium text-xl text-gray-600 ">Fizik Tedavi Hizmetleri</p>
      <p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
    <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500"></i>
  </div>
</a>
<a href="" class="w-full">
  <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee]">
    <!-- Kartın tamamı için animasyon ekleniyor -->
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10 bg-stone-100 text-white hover-settings group-hover:bg-[#e7ecee]">
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600"></i>
      <p class="font-medium text-xl text-gray-600 ">Fizik Tedavi Hizmetleri</p>
      <p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
    <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500"></i>
  </div>
</a>
<a href="" class="w-full">
  <div class="mx-2 flex flex-col items-center justify-center group overflow-visible hover:bg-[#e7ecee]">
    <!-- Kartın tamamı için animasyon ekleniyor -->
    <div class="flex flex-col items-center p-4 transition-all duration-300 group-hover:translate-y-[-60px] group-hover:relative z-10 bg-stone-100 text-white hover-settings group-hover:bg-[#e7ecee]">
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600"></i>
      <p class="font-medium text-xl text-gray-600 ">Fizik Tedavi Hizmetleri</p>
      <p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
    <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500"></i>
  </div>
</a>

</div>


@endsection 
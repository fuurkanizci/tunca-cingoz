@extends('layouts.layout')
@section('content')

<div class="swiper mySwiper w-full h-screen">
    <div class="swiper-wrapper leading-none">
      
        <!-- Slider 1 -->
        <div class="swiper-slide relative w-full h-screen">
            <!-- Zoom efekti için resim -->
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide1.jpg') }}" alt="Logo" class="slider-zoom object-cover w-full h-full">

            <!-- İçerik kısmı -->
            <div class="cont absolute top-10 max-sm:top-4 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
                <p class="select-disable text-left w-full">Normal Yaşantına Hızla Geri Dön!</p> <!-- Metin sola dayalı -->
                <div class="w-full text-left mt-20 max-md:mt-4 max-lg:mt-6"> <!-- Linki sola dayalı hale getirdik -->
                    <a href="#" class="bg-blue-600 text-white px-12 py-7 max-lg:py-5 max-md:px-8 max-md:py-3 rounded mt-4 items-start select-disable mr-4 max-sm:px-5 max-sm:mr-1 max-sm:text-md max-sm:py-4 ">Randevu Oluştur<i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4 max-sm:py-1 max-sm:px-2"></i></a>
                </div>
            </div>
        </div> 

        <!-- Slider 2 -->
        <div class="swiper-slide relative w-full h-screen">
            <!-- Zoom efekti için resim -->
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide2.jpg') }}" alt="Logo" class="slider-zoom object-cover w-full h-full">

            <!-- İçerik kısmı -->
            <div class="cont absolute top-10 max-sm:top-4 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
                <p class="select-disable">Return to Normal Activities</p>
                <div class="w-full text-left mt-20"> <!-- Linki sola dayalı hale getirdik -->
                    <a href="#" class="bg-blue-600 text-white px-12 py-7 max-md:px-8 max-md:py-3 rounded mt-4 items-start select-disable mr-4 max-sm:text-sm max-sm:px-4">Randevu Oluştur<i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4"></i></a>
                </div>
            </div>
        </div>

        <!-- Slider 3 -->
        <div class="swiper-slide relative w-full h-screen">
            <!-- Zoom efekti için resim -->
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/slide3.jpg') }}" alt="Logo" class="slider-zoom object-cover w-full h-full">

            <!-- İçerik kısmı -->
            <div class="cont absolute top-10 max-sm:top-4 left-0 w-full h-full flex flex-col justify-center items-start text-white p-6 slider-elements">
                <p class="select-disable">Return to Normal Activities</p>
                <div class="w-full text-left mt-20"> <!-- Linki sola dayalı hale getirdik -->
                    <a href="#" class="bg-blue-600 text-white px-12 py-7 max-md:px-8 max-md:py-3 rounded mt-4 items-start select-disable mr-4 max-sm:text-sm max-sm:px-4">Randevu Oluştur<i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 ml-4"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Slider Navigation Arrows -->
    <div class="swiper-button-next next-slider"></div>
    <div class="swiper-button-prev"></div>
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
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600 max-md:text-5xl "></i>
      <p class="font-medium text-xl text-gray-600 max-md:text-base">Fizik Tedavi Hizmetleri</p>
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
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600 max-md:text-5xl"></i>
      <p class="font-medium text-xl text-gray-600 max-md:text-base ">Fizik Tedavi Hizmetleri</p>
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
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600 max-md:text-5xl"></i>
      <p class="font-medium text-xl text-gray-600 max-md:text-base ">Fizik Tedavi Hizmetleri</p>
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
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600 max-md:text-5xl"></i>
      <p class="font-medium text-xl text-gray-600 max-md:text-base ">Fizik Tedavi Hizmetleri</p>
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
      <i class="fa-solid fa-person-running text-[95px] mb-2 text-blue-600 max-md:text-5xl"></i>
      <p class="font-medium text-xl text-gray-600 max-md:text-base ">Fizik Tedavi Hizmetleri</p>
<p class="opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-center text-[#7c8fa7] p-2 arrow-hidden">
        Fizik tedavi uzmanlarımız, yaralanmaların tedavisinde sizlere en iyi hizmeti sunarak hızlı bir iyileşme süreci sağlar.
      </p>
    </div>
   <i class="fa-solid fa-angle-down border-2 border-blue-500 rounded-full p-2 mb-5 text-blue-500 arrow-hidden"></i>
  </div>
</a>

</div>

<div class="container mx-auto flex flex-row justify-center gap-5 p-5 max-xl:flex-wrap-reverse">
  <div class="flex flex-col justify-center max-w-2xl pl-9 max-md:pl-0">
    <div class="text-blue-500 mb-5 font-medium">Ortopedi Kliniğimize Hoş Geldiniz</div>
    <div class="text-6xl font-base mb-9 max-md:text-4xl max-md:font-medium max-md:mb-4 max-sm:text-2xl">İhtiyaçlarınıza özel ortopedi hizmetleri sunuyoruz</div>
    <div class="mb-5">
      Rutin doktor muayenelerinden en ileri düzeydeki prosedürlere kadar her an yanınızdayız.
      Uzman doktorlarımız ortopedik cerrahi alanında uzmanlaşmış olup, hem yetişkinlerde hem de çocuklarda kemikler, kaslar ve bağlarla ilgili yaralanmaların teşhis ve tedavisini gerçekleştirmektedir.
    </div>
    <a href="" class="text-cyan-500 hover:text-blue-500 group transition ease-in-out">
  <div class="text-cyan-500 hover:text-blue-500 transition ease-in-out">
    Hakkımızda daha fazla
    <i class="fa-solid fa-angle-right border-2 border-cyan-500 rounded-full p-1 px-2 ml-4 
       max-sm:py-1 max-sm:px-2 text-md group-hover:border-blue-500 ">
    </i>
  </div>
</a>

  </div>
  <div>
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/about.jpg') }}" alt="Logo" class="">
  </div>
</div>
    <!-- Çizgi -->
<hr class="mt-[90px] mb-[40px] border-t-1 border-gray-300">
<div class="container mx-auto flex flex-row justify-around gap-5  max-xl:flex-wrap mb-16">
  <div class="flex flex-col justify-center max-w-2xl pl-9 max-md:pl-0 max-sm:ml-2">
   <div class="text-6xl font-base mb-4 max-md:text-4xl max-md:font-medium max-md:mb-2 max-sm:text-2xl">Acıyan yerini tarif et</div>
    <div class="text-cyan-400  font-medium max-md:text-xs">Specialized Orthopedics to Meet Your Needs</div></div> 
    <div class="pt-6">
    <a href="#" class="bg-[#05cbc8] text-white px-4 py-6 rounded mt-4 items-start select-disable  max-md:px-2 max-md:py-3  max-md:text-xs">
   Destek Asistanımıza Ulaş  <i class="fa-solid fa-angle-right border-2 border-white rounded-full py-2 px-3 max-md:ml-1"></i>
    </a>
  </div>
</div>
<div class="grid grid-cols-5  max-lg:grid-cols-4 max-md:grid-cols-2 max-sm:grid-cols-1 bg-stone-100 leading-6">
  <!-- Kart 1 -->
  <a href="" class="w-full drop-shadow-lg">
    <div class="relative group w-full">
      <!-- Resim -->
      <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/about.jpg') }}" alt="Logo" class="transition-opacity duration-300 w-full h-full object-cover">

      <!-- Siyah Overlay (Hover'da Görünecek) -->
      <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>

      <!-- Üzerindeki Yazı -->
      <div class="absolute inset-0 flex items-center justify-center text-white text-2xl font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        Hakkımızda Daha Fazla
      </div>
    </div>
  </a>
    <a href="" class="w-full drop-shadow-lg">
    <div class="relative group w-full">
      <!-- Resim -->
      <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/about.jpg') }}" alt="Logo" class="transition-opacity duration-300 w-full h-full object-cover">

      <!-- Siyah Overlay (Hover'da Görünecek) -->
      <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>

      <!-- Üzerindeki Yazı -->
      <div class="absolute inset-0 flex items-center justify-center text-white text-2xl font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        Hakkımızda Daha Fazla
      </div>
    </div>
  </a>  <a href="" class="w-full drop-shadow-lg">
    <div class="relative group w-full">
      <!-- Resim -->
      <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/about.jpg') }}" alt="Logo" class="transition-opacity duration-300 w-full h-full object-cover">

      <!-- Siyah Overlay (Hover'da Görünecek) -->
      <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>

      <!-- Üzerindeki Yazı -->
      <div class="absolute inset-0 flex items-center justify-center text-white text-2xl font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        Hakkımızda Daha Fazla
      </div>
    </div>
  </a>  <a href="" class="w-full drop-shadow-lg">
    <div class="relative group w-full">
      <!-- Resim -->
      <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/about.jpg') }}" alt="Logo" class="transition-opacity duration-300 w-full h-full object-cover">

      <!-- Siyah Overlay (Hover'da Görünecek) -->
      <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>

      <!-- Üzerindeki Yazı -->
      <div class="absolute inset-0 flex items-center justify-center text-white text-2xl font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        Hakkımızda Daha Fazla
      </div>
    </div>
  </a>  <a href="" class="w-full drop-shadow-lg">
    <div class="relative group w-full">
      <!-- Resim -->
      <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/views/images/about.jpg') }}" alt="Logo" class="transition-opacity duration-300 w-full h-full object-cover">

      <!-- Siyah Overlay (Hover'da Görünecek) -->
      <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>

      <!-- Üzerindeki Yazı -->
      <div class="absolute inset-0 flex items-center justify-center text-white text-2xl font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        Hakkımızda Daha Fazla
      </div>
    </div>
  </a>
</div>

@endsection 
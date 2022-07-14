@extends('main.master')
@section('content')
<section class="hero my-20 font-inter px-6 md:p-0 mx-auto">  
  <div class="title md:w-4/5 md:mx-5">
    <p class="text-slate-800 font-bold block mb-8 text-6xl sm:text-8xl md:text-5xl lg:text-8xl">Guide<span class="text-blue-500">Krw.</span></p>
    <span class="subtitle text-2xl font-semibold text-slate-700 block mb-1 sm:text-4xl md:text-2xl lg:text-4xl">Selamat Datang</span>
    <p class="text-justify text-base sm:text-lg md:text-base lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat minus enim optio odit perspiciatis error nostrum natus et dolores, tenetur fuga? Tempora, nobis rerum? Blanditiis nulla quam itaque nisi impedit nostrum, ut maiores odit consectetur aperiam quibusdam, reiciendis iure quisquam, possimus pariatur similique sequi!</p>
    <a href="#" class=" mt-5 mb-14 bg-blue-500 inline-block text-white text-sm py-2 px-3 sm:text-md sm:py-3 sm:px-5 md:text-sm  md:py-2 md:px-3 rounded-full lg:py-2 lg:px-3 lg:text-lg hover:bg-blue-700 hover:shadow-inner">Lorem, ipsum dolor.</a>
    <img src="{{ asset('assets/img/tugu-padi.jpg') }}" alt="tugu padi karawang" class="rounded-l-full md:hidden lg:hidden">
  </div>  
  <div class="image hidden md:block">
    <img src="{{ asset('assets/img/tugu-padi.jpg') }}" alt="tugu padi karawang" class="rounded-l-full">
  </div>
</section>
@endsection
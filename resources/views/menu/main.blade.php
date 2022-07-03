@extends('main.master')
@section('content')
<section class="hero mt-20 font-inter">  
  <div class="title lg:w-3/4 lg:px-7 md:w-2/3 md:mx-5">
    <p class="lg:text-8xl text-slate-800 font-bold block mb-4 md:text-7xl">Guide<span class="text-blue-500">Krw.</span></p>
    <span class="subtitle font-semibold lg:text-4xl text-slate-700 block mb-3 md:text-3xl">Selamat Datang</span>
    <p class="text-justify lg:text-lg md:text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat minus enim optio odit perspiciatis error nostrum natus et dolores, tenetur fuga? Tempora, nobis rerum? Blanditiis nulla quam itaque nisi impedit nostrum, ut maiores odit consectetur aperiam quibusdam, reiciendis iure quisquam, possimus pariatur similique sequi!</p>
    <a href="#" class=" mt-10 bg-blue-500 lg:px-5 lg:py-2 lg:text-lg inline-block text-white rounded-full md:px-4 md:py-2 md:text-sm">Lorem, ipsum dolor.</a>
  </div>
  <div class="image">
    <img src="{{ asset('assets/img/tugu-padi.jpg') }}" alt="tugu padi karawang" class="rounded-l-full">
  </div>
</section>
@endsection
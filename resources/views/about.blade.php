@extends('layouts.main')

@section('container')


<section class="aspect-h-3 ">
  <div class="bg-cover rounded-lg mx-20 mt-20" style="background-image: url(img/about.jpg)">

    <div class="pt-3 font-Montserrat text-6xl font-bold" >
      <span class="before:block before:absolute before:-inset-2 before:-skew-y-3 before:bg-biru relative inline-block mb-6">
        <span class="relative text-white">About Us</span>
      </span>
    </div>

    <div class="">
      <h1 class="font-Montserrat font-bold text-6xl text-white text-center">MIDDLEWARE TEAM</h1>
    </div>

    <div class="pt-72 pb-4">
      <div class="mx-auto max-w-1xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-5 lg:gap-x-8 lg:px-8">
        <div class="aspect-w-3 aspect-h-4 rounded-lg relative overflow-hidden group">
            <div class="h-full w-full bg-cover bg-local group-hover:scale-105 transition-all duration-500" style="background-image: url(img/farhat.jpg)">
            </div>
            <div class="w-full h-full bg-gradient-to-t from-black/50 invisible group-hover:visible transition-all duration-500 absolute bottom-0">
                <p class="text-white pt-60 pl-5">Farhat Abdurachman</p>
            </div>
        </div>
          <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group relative">
            <div class="h-full w-full bg-cover bg-local group-hover:scale-105 transition-all duration-500" style="background-image: url(img/billy.jpg)">
            </div>
            <div class="w-full h-full bg-gradient-to-t from-black/50 invisible group-hover:visible transition-all duration-500 absolute bottom-0">
                <p class="text-white pt-60 pl-5">Billy Firdaniel Nafitra</p>
            </div>
          </div>
          <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group relative">
            <div class="h-full w-full bg-cover bg-local group-hover:scale-105 transition-all duration-500" style="background-image: url(img/dikdik.jpg)">
            </div>
            <div class="w-full h-full bg-gradient-to-t from-black/50 invisible group-hover:visible transition-all duration-500 absolute bottom-0 ">
                <p class="text-white pt-60 pl-5">Dik Dik Nur Illahi</p>
            </div>
          </div>
          <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group relative">
            <div class="h-full w-full bg-cover bg-local group-hover:scale-105 transition-all duration-500" style="background-image: url(img/aril.jpg)">
            </div>
            <div class="w-full h-full bg-gradient-to-t from-black/50 invisible group-hover:visible transition-all duration-500 absolute bottom-0 ">
                <p class="text-white pt-60 pl-5">Muhammad Fazril Fuady</p>
            </div>
          </div>
          <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group relative">
            <div class="h-full w-full bg-cover bg-local group-hover:scale-105 transition-all duration-500" style="background-image: url(img/mala.jpg)">
            </div>
            <div class="w-full h-full bg-gradient-to-t from-black/50 invisible group-hover:visible transition-all duration-500 absolute bottom-0 ">
                <p class="text-white pt-60 pl-5">Siti Komalasari</p>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>



@endsection
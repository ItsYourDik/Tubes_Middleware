@extends('layouts.main')

@section('container')

@if($posts->count())
    <section class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 ">
    <a href="/posts/{{ $posts[0]->slug }}">
      <div class="mt-8 grid grid-cols-3 h-96 hover:underline decoration-emerald-300 overflow-hidden ">
        <div class="bg-teal-900 ">
          <h1 class="mt-28 mx-4 text-emerald-300 font-Montserrat font-semibold">
            {{ $posts[0]->category->name }}
          </h1>
          <h1 class="mx-4 font-Montserrat font-black text-white text-4xl">
            {{ $posts[0]->title }}
          </h1>
          <h1 class="mx-4 font-Montserrat font-semibold text-white text-sm truncate">
            {{ $posts[0]->excerpt }}
          </h1>
        </div>
        @if ($posts[0]->image)
        <div class=" col-span-2 bg-cover" style="background-image: url({{ asset('storage/' . $posts[0]->image) }})"></div>
      @else
        <div class=" col-span-2 bg-cover" style="background-image: url(https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }})"></div>
      @endif

      </div>
    </a>
    </section>

    <section>
      <div class="bg-white mt-10">
        <div class="flex items-center justify-center">
          <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:grid-cols-4">
      @foreach ($posts->skip(1) as $post)
          <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-lg">
            <div class="h-96 w-72">
              @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-125">
            @else
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-125" alt="{{  $post->category->name  }}">
            @endif
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
            <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 transition-all duration-500 group-hover:translate-y-0">
              <h1 class="font-dmserif text-3xl font-bold text-white">{{ $post->title }}</h1>
              <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100 ">{{ $post->excerpt }}</p>
              <button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See More</button>
            </div>
          </div>
          
          
          @endforeach
        </div>
      </div>
    </div>

@else
<p class="flex justify-center items-center font-black text-3xl h-screen">No Post Fond.</p>
@endif

</section>


@endsection
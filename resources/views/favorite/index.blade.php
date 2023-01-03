@extends('layouts.main')

@section('container')

<div class="mt-24 flex justify-center">
<h1 class="font-Montserrat font-bold text-4xl">Favorite Posts</h1>
</div>

@if($itemfavorite->count())
    <section class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 ">
    <a href="/posts/{{ $itemfavorite[0]->posts->slug }}">
      <div class="mt-5 grid grid-cols-3 h-96 hover:underline decoration-emerald-300 overflow-hidden ">
        <div class="bg-teal-900 ">
          <h1 class="mt-28 mx-4 text-emerald-300 font-Montserrat font-semibold">
            By {{ $itemfavorite[0]->posts->author->name }} in {{ $itemfavorite[0]->posts->category->name }}
          </h1>
          <h1 class="mx-4 font-Montserrat font-black text-white text-4xl">
            {{ $itemfavorite[0]->posts->title }}
          </h1>
          <h1 class="mx-4 font-Montserrat font-semibold text-white text-sm truncate">
            {{ $itemfavorite[0]->posts->excerpt }}
          </h1>
        </div>
        @if ($itemfavorite[0]->posts->image)
        <div class=" col-span-2 bg-cover" style="background-image: url({{ asset('storage/' . $itemfavorite[0]->posts->image) }})"></div>
      @else
        <div class=" col-span-2 bg-cover" style="background-image: url(https://source.unsplash.com/1200x400?{{ $itemfavorite[0]->posts->category->name }})"></div>
      @endif

      </div>
    </a>
    </section>

    <section>
      <div class="bg-white mt-10">
        <div class="flex items-center justify-center">
          <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:grid-cols-4">
      @foreach ($itemfavorite->skip(1) as $post)
          <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-lg">
            <div class="h-96 w-72">
              @if ($post->posts->image)
              <img src="{{ asset('storage/' . $post->posts->image) }}" alt="{{ $post->posts->category->name }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-125">
            @else
              <img src="https://source.unsplash.com/500x400?{{ $post->posts->category->name }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-125" alt="{{  $post->posts->category->name  }}">
            @endif
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
            <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 transition-all duration-500 group-hover:translate-y-0">

              <h1 class="font-dmserif text-3xl font-bold text-white">{{ Str::limit($post->posts->title,25) }}</h1>
              <h1 class="font-dmserif text-m text-white">{{$post->posts->author->name }} {{ $post->posts->created_at->diffForHumans()}}</h1>
              <br>
              <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100 ">{{ Str::limit($post->posts->excerpt,100) }}</p>
              <a href="/posts/{{ $post->posts->slug }}" class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See More</a>
            </div>
          </div>
          
          
          @endforeach
        </div>
      </div>
    </div>
    </section>

@else
<p class="flex justify-center items-center font-black text-3xl h-screen">No Post Fond.</p>
@endif

<div class="flex justify-center items-center mt-8">
  {{ $itemfavorite->links() }}
</div>


@endsection



{{-- @extends('layouts.main')

@section('container')

<div class="h-screen flex justify-center items-center my-auto">
  @foreach ($itemfavorite as $item)
    <h1>{{ $item->posts->title}}</h1>
      
  @endforeach
</div>



@endsection --}}
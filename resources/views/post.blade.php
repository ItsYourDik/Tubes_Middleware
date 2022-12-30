@extends('layouts.main')

@section('container')


<section class="grid grid-cols-2 gap-3 mx-10 pt-20">
  <div class=" overflow-hidden aspect-w-3 aspect-h-4 ">
    <div>
      @if ($post->image)
      <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="rounded-lg h-2/3 w-full object-cover object-center">
      @else
      <img src="https://source.unsplash.com/1080x1920?{{ $post->category->name }}" class="rounded-lg h-2/3 w-full object-cover " alt="{{  $post->category->name  }}">
      @endif
    </div>
    
  </div>

  <div class="h-screen mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <h1 class="font-Montserrat font-semibold text-3xl pb-4">{{ $post['title'] }}</h1>
    <p>By <a href="/posts?author={{ $post->author->username }}" 
      class="text-decoration-none">{{ $post->author->name }}
      </a> in <a href="/posts?category={{$post->category->slug}}" 
      class="text-decoration-none">{{$post->category->name}}
      </a>
    </p>
    <br>
    <article class="text-justify">
      {!! $post->body !!}
    </article>
    <br>
    <a href="/posts"class="rounded-full bg-neutral-900 py-2 px-3 font-com text-sm capitalize text-white shadow shadow-black/60">Back To Post</a>
  </div>

</section>

        
@endsection
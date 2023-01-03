@extends('layouts.main')

@section('container')

<section class="grid grid-cols-2 gap-3 mx-10 pt-20">

  <div class=" overflow-hidden aspect-w-3 aspect-h-4 ">
    <div>
      @if ($post->image)
      <div>
        <form action="/favorite" method="post">
          @csrf
          <input type="hidden" name="post_id" value={{ $post->id }}>
          <button type="submit" class="absolute right-0 top-1">
          @if(isset($itemfavorite) )
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" class="text-red-500 hover:text-red-700 hover:scale-105 transition-all duration-500" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
          </svg>
          @else
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" class="text-red-500 hover:text-red-700 hover:scale-105 transition-all duration-500" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
          </svg>
          @endif
          </button>
        </form>
      </div>
      <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="rounded-lg h-2/3 w-full object-cover object-center">
      @else
      <div>
        <form action="/favorite" method="post">
          @csrf
          <input type="hidden" name="post_id" value={{ $post->id }}>
          <button type="submit" class="absolute right-0 top-1">
          @if(isset($itemfavorite) )
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" class="text-red-500 hover:text-red-700 hover:scale-105 transition-all duration-500" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
          </svg>
          @else
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" class="text-red-500 hover:text-red-700 hover:scale-105 transition-all duration-500" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
          </svg>
          @endif
          </button>
        </form>
      </div>
      <img src="https://source.unsplash.com/1080x1920?{{ $post->category->name }}" class="rounded-lg h-2/3 w-full object-cover " alt="{{  $post->category->name  }}">
      @endif
    </div>
    
  </div>

  <div class="h-screen mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    
    @if (session()->has('success'))
    <div class="mt-2 bg-green-500 text-white p-4 rounded-lg text-lg">{{ session('success') }}</div>
    @endif
    @if (session()->has('loginError'))
    <div class="mt-2 bg-red-500 text-white p-4 rounded-lg text-lg">{{ session('loginError') }}</div>
    @endif
    
    <h1 class="font-Montserrat font-semibold text-3xl pb-4">{{ $post['title'] }}</h1>
    <p>By <a class="text-blue-500" href="/posts?author={{ $post->author->username }}" 
      class="text-decoration-none">{{ $post->author->name }}
      </a> in <a class="text-blue-500" href="/posts?category={{$post->category->slug}}" 
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
@extends('dashboard.layouts.main')

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
    <article class="text-justify">
      {!! $post->body !!}
    </article>
  </div>

</section>

        
@endsection
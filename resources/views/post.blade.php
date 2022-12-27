@extends('layouts.main')

@section('container')
<div class="min-h-screen bg-cover bg-fixed">
          @if ($post->image)
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="h-full w-full object-cover object-center group-hover:scale-105 transition-all duration-300">
          @else
          <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="h-full w-full object-cover object-center group-hover:scale-105 transition-all duration-300" alt="{{  $post->category->name  }}">
          @endif
        </div>
        
        <div class="h-screen mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <h1 class="font-Montserrat font-semibold text-xl">{{ $post['title'] }}</h1>
          <article>
            {!! $post->body !!}
          </article>
        </div>
        
@endsection
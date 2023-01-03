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
    <div class="flex my-4 text-white">
      <a href="/dashboard/posts" class="group">
        <div class="border bg-gradient-to-b from-blue-500 to-blue-600 shadow-blue-600/50 group-hover:bg-gradient-to-b group-hover:from-blue-700 group-hover:to-blue-800 p-2 flex rounded-lg">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg>
          <p class="px-2">Back</p> 
        </div>
      </a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="group">
        <div class="border bg-gradient-to-b from-orange-500 to-orange-600 shadow-orange-600/50 group-hover:bg-gradient-to-b group-hover:from-orange-700 group-hover:to-orange-800 p-2 flex rounded-lg mx-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
          <p class="px-2">Edit</p> 
        </div>
      </a>
      <div class="group">
      <form action="/dashboard/posts/{{ $post->slug }}" method="post">
        @method('delete')
        @csrf
        <button class="order bg-gradient-to-b from-red-500 to-red-600 shadow-red-600/50 group-hover:bg-gradient-to-b group-hover:from-red-700 group-hover:to-red-800 p-2 flex rounded-lg" onclick="return confirm('Are You Sure?')"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
          <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
        </svg>
        <p class="px-2">Delete</p> 
      </button>
    </form>
  </div>
    </div>
  </div>

</section>

        
@endsection
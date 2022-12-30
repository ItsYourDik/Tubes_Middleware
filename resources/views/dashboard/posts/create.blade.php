@extends('dashboard.layouts.main')

@section('container')

<div>
  <div class="">
    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="shadow sm:overflow-hidden sm:rounded-md">
          <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

            <div class="col-span-6">
              <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
              <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required value="{{ old('title') }}">
            </div>

            <div class="col-span-6 ">
              <label for="slug" class="block text-sm font-medium text-gray-700">slug</label>
              <input type="text" name="slug" id="slug"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required value="{{ old('slug') }}">
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="category_id" class="block text-sm font-medium text-gray-700">category</label>
              <select name="category_id"class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                @foreach ($categories as $category)
                @if(old('category_id') == $category->id)
                  <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                  @else
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
              @endforeach
              </select>
            </div>

            <div>
              <label for="image" class="my-2">Post Image</label>
              <img class="img-preview w-3/12 my-2" alt="">
              <input type="file" id="image" name="image" onchange="previewImage()" class="
              file:bg-gradient-to-b file:from-blue-500 file:to-blue-600 file:px-4 file:py-2 file:m-3 file:border-none file:rounded-full file:text-white file:cursor-pointer file:shadow-lg file:shadow-blue-600/50
              
              bg-gradient-to-br from-gray-600 to bg-gray-700 text-white/80 rounded-full cursor-pointer shadow-xl shadow-gray-700/60
              ">
            </div>

            <div>
              <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
              <div class="mt-1">
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></trix-editor>
              </div>
              <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.</p>
            </div>



          </div>
          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create Post</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });


  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview =document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>

@endsection
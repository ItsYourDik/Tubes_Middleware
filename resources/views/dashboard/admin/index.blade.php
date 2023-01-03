@extends('dashboard.layouts.main')

@section('container')
    

<div class="p-4 font-bold text-gray-600">All Posts</div>
<div class="flex justify-end mr-72">
<form action="/dashboard/allpost" class="relative  mb-4 w-max justify-end">
  @if (request('category'))
    <input type="hidden" class = "transition-all duration-500 peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4 " name="category" value="{{ request('category') }}">
  @endif
  @if (request('author'))
    <input type="hidden" class="transition-all duration-500 peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4 " name="author" value="{{ request('author') }}">
  @endif
    <input type="text" class="form-control transition-all duration-500 peer cursor-pointer relative z-10 h-8 w-15 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4 " placeholder="Search.." name="search" value="{{ request('search') }}">
  <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-500 absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-slate-600 px-3.5 peer-focus:border-lime-300 peer-focus:stroke-lime-500 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
  </svg>
</form>
</div>

@if($posts->count())

          <div class="grid  lg:grid-cols-1  md:grid-cols-1 gap-3 container w-4/5 mx-5">
            <div class="col-span-2 flex flex-auto items-center justify-between  bg-white rounded shadow-sm ">
              <table class="min-w-full divide-y divide-gray-200 table-auto ">
                <thead class="bg-gray-50 ">
                  <tr>
                    <th scope="col"
                      class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      #
                    </th>
                    <th scope="col "
                      class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                      Title
                    </th>
                    <th scope="col"
                      class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Category
                    </th>
                    <th scope="col"
                      class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Role
                    </th>
                  </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                  @foreach ($posts as $post)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                          {{ $loop->iteration }}
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="ml-4 ">
                        <div class="text-sm font-medium text-gray-900">
                          {{ $post->title }}
                        </div>
                      </div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                      <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{ $post->category->name }}
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center ">
                      <a href="/dashboard/admin/posts/{{ $post->slug }}" class="hover:text-blue-600 hover:scale-110 transition-all duration-200 mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg></a>
                      <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="hover:text-red-500 hover:scale-110 transition-all duration-200" onclick="return confirm('Are You Sure?')"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                          <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                        </svg></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

          @else
            <p class="flex justify-center items-center font-black text-3xl">No Post Fond.</p>
          @endif

          <div class="flex justify-center items-center my-8">
            {{ $posts->links() }}
          </div>

          @endsection
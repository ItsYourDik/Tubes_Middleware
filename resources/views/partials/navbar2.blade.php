<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-gradient-to-b from-gray-800/50">
  <div class="container">
    <div class="relative flex items-center justify-between">
      <div class="px-4">
        <a href="/" class="block ">
        <div>
          <img class="h-20" src="../img/logo/logo.png" alt="">
        </div>
        </a>
      </div>
      
      <div class="flex items-center px-4">
        <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
          <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
        </button>

        <nav id="nav-menu" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent">
          <ul class="block lg:flex">
            <li class="group ml-5 mt-1">
              <form action="/posts" class="relative mx-auto w-max">
                @if (request('category'))
                  <input type="hidden" class = "transition-all duration-500 peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4 text-white" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                  <input type="hidden" class="transition-all duration-500 peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4 text-white" name="author" value="{{ request('author') }}">
                @endif
                  <input type="text" class="form-control transition-all duration-500 peer cursor-pointer relative z-10 h-8 w-15 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4 text-white" placeholder="Search.." name="search" value="{{ request('search') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-500 absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-white px-3.5 peer-focus:border-lime-300 peer-focus:stroke-lime-500 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </form>
            </li>
            <li class="group">
              <a href="/" class="mx-8 flex py-2 text-base font-semibold text-white group-hover:text-primary dark:text-white">Home</a>
            </li>
            <li class="group">
              <a href="/posts" class="mx-8 flex py-2 text-base font-semibold text-white group-hover:text-primary dark:text-white">Blog</a>
            </li>
            <li class="group">
              <a href="/fav" class="mx-8 flex py-2 text-base font-semibold text-white group-hover:text-primary dark:text-white">Favorite</a>
            </li>
            <li class="group">
              <a href="/about" class="mx-8 flex py-2 text-base font-semibold text-white group-hover:text-primary dark:text-white">About</a>
            </li>
            
            {{-- <li class="mt-3 flex items-center pl-8 lg:mt-0">
              <div class="flex">
                <span class="mr-2 text-sm text-white font-semibold">light</span>
                <input type="checkbox" class="hidden" id="dark-toggle" />
                <label for="dark-toggle">
                  <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                    <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                  </div>
                </label>
                <span class="ml-2 text-sm text-white font-semibold">dark</span>
              </div>
            </li> --}}
            @auth
            <div class="flex justify-end">
              <!-- Dropdown Container -->
              <div class="relative inline-block">
                <!-- Dropdown Toggle Button -->
                <button
                  class="inline-flex justify-center items-center space-x-2 font-semibold px-3 py-2 text-base text-white dropdown_button"
                  onclick="show_list()"
                >
                  Hi {{ auth()->user()->username }}
                  <svg class="hi-solid hi-chevron-down inline-block w-5 h-5 opacity-50" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </button>

                <div id="courses_id" class="courses absolute right-0 origin-top-right mt-2 w-48 shadow-xl rounded z-1">
                  <div class="bg-white ring-1 ring-black ring-opacity-5 rounded divide-y divide-gray-100">
                    <div class="p-2 space-y-1">
                      <a href="/dashboard" class="flex items-center space-x-2 rounded py-2 px-3 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                        <svg class="hi-solid hi-user-circle inline-block w-5 h-5 opacity-50" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/></svg>
                        <span>Dashboard</span>
                      </a>
                    </div>
                    <div class="p-2 space-y-1">
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="w-full text-left flex items-center space-x-2 rounded py-2 px-3 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                          </svg> 
                          <span>Logout</span>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            @else
            <li class="group">
              <a href="/login" class="mx-8 flex py-2 text-base font-semibold text-white group-hover:text-primary dark:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right pr-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
              </svg>Login</a>
            </li>
            @endauth
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>

<script>
  function show_list() {
  var courses = document.getElementById("courses_id");

  if (courses.style.display == "block") {
      courses.style.display = "none";
  } else {
      courses.style.display = "block";
  }
}

window.onclick = function (event) {
  if (!event.target.matches('.dropdown_button')) {
      document.getElementById('courses_id')
          .style.display = "none";
  }
}  
</script>


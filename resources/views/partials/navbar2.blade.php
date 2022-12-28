<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-gradient-to-b from-gray-800/50">
  <div class="container">
    <div class="relative flex items-center justify-between">
      <div class="px-4">
        <a href="/" class="block ">
        <div>
          <img class="h-20" src="img/logo/logo.png" alt="">
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
            <li class="group ml-5">
              <form action="/posts" class="relative mx-auto w-max">
                @if (request('category'))
                  <input type="hidden" class = "transition-all duration-500 peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4 text-white" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                  <input type="hidden" class="transition-all duration-500 peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4 text-white" name="author" value="{{ request('author') }}">
                @endif
                  <input type="text" class="form-control transition-all duration-500 peer cursor-pointer relative z-10 h-8 w-8 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4 text-white" placeholder="Search.." name="search" value="{{ request('search') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-500 absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-lime-300 peer-focus:stroke-lime-500 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
              <a href="/about" class="mx-8 flex py-2 text-base font-semibold text-white group-hover:text-primary dark:text-white">About</a>
            </li>
            
            <li class="mt-3 flex items-center pl-8 lg:mt-0">
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
            </li>
            <li class="group">
              
              <a href="/login" class="mx-8 flex py-2 text-base font-semibold text-white group-hover:text-primary dark:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right pr-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
              </svg>Login</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>


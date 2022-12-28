<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <div class=" h-screen m-auto flex">
        <div hidden class=" h-full w-full lg:block">
            <img class="w-full h-full object-cover" src="img/apa.jpg" alt="">
        </div>

        <div class="relative h-full mx-auto lg:w-full">
            <div class="m-auto py-12 px-6 sm:p-20 xl:w-10/12">
                <div class="space-y-4">
                    <a href="">
                        <img src="../public/images/logo.svg" class="w-40" alt="tailus logo">
                    </a>
                    <p class="font-medium text-lg text-gray-600">Welcome to VAKANTIE ! Please Login </p>
                </div>

                @if (session()->has('success'))
                <div class="mt-2 bg-red-500 text-white p-4 rounded-lg text-lg">{{ session('success') }}</div>
                @endif
                @if (session()->has('loginError'))
                <div class="mt-2 bg-red-500 text-white p-4 rounded-lg text-lg">{{ session('loginError') }}</div>
                @endif

                <form action="/login" method="POST" class="space-y-6 py-6">
                    @csrf
                    <div>
                        <input 
                                type="email" 
                                name="email"
                                id="email"
                                required value="{{ old('email') }}"
                                placeholder="Email"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none"
                        >
                    </div>

                    <div class="flex flex-col items-end">
                        <input 
                                type="password" 
                                name="password"
                                id="password"
                                placeholder="Password"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none"
                        >
                    </div>

                    <div>
                        <button class="w-full px-6 py-3 rounded-xl bg-sky-500 transition hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-800">
                            <span class="font-semibold text-white text-lg">Login</span>
                        </button>
                        <a href="#" type="reset" class="w-max p-3 -ml-3">
                            <span class="text-sm tracking-wide text-blue-600">Create new account</span>
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </section>
</body>
</html>

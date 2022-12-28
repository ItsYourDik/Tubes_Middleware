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
                    <p class="font-medium text-lg text-gray-600">Register Now </p>
                </div>
                

                <form action="" class="space-y-6 py-6">
                    <div>
                        <input 
                                type="email" 
                                placeholder="Your Email"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none"
                        >
                    </div>

                    <div class="flex flex-col items-end">
                        <input 
                                type="password" 
                                placeholder="What's the secret word ?"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none"
                        >
                    </div>

                    <div>
                        <button class="w-full px-6 py-3 rounded-xl bg-sky-500 transition hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-800">
                            <span class="font-semibold text-white text-lg">Register</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </section>
</body>
</html>
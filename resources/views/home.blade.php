@extends('layouts.main')

@section('container')
    <section>
        <div class="min-h-screen w-full flex flex-col justify-center items-center bg-fixed bg-cover" style="background-image: url(img/jumbotron.jpg)">
            <h1 class="font-Montserrat font-bold text-7xl text-white">VAKANTIE</h1>
            <h1 class="font-Montserrat font-bold text-5xl text-white">LIFE'S BEAUTIFUL WITH NATURE</h1>
        </div>
    </section>

    <section>
        <div class="h-screen static">
            <div class="grid grid-cols-2">
                <div class="h-screen">
                    <img class="mt-28" src="img/rafting.jpg" alt="">
                </div>
                <div class="ml-10 self-center font-Montserrat">
                    <h1 class="text-2xl ">Pangalengan</h1>
                    <p class="pt-2">Pangalengan, offers many Instagramable tourist hits. Pangalengan tourist attractions that are currently hits vary, including natural tourism and man-made tourism, all of which you can try when you visit there. The cool air also makes your tourism activities more comfortable.</p>
                    <button class="my-2 px-3 py-2 bg-blue-600 rounded-md text-white outline-none focus:ring-4 shadow-lg  active:scale-90  hover:bg-blue-500">Explore</button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex justify-center font-Montserrat text-6xl font-bold" >
          <span class="before:block before:absolute before:-inset-3 before:-skew-y-3 before:bg-biru relative inline-block mb-6">
            <span class="relative text-white">DESTINATION</span>
          </span>
        </div>
    </section>

    <section  class="bg-cover" style="background-image: url(img/apa.jpg)">
        
            <div class="flex h-[55rem] items-center justify-center bg-gradient-to-t from-white">
                <div class="mx-auto max-w-6xl px-6">
                    <div class="flex [&:hover>div]:w-16 [&>div:hover]:w-[45rem]">
                        <div class="group relative h-[30rem] w-[40rem] cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                        <a href="#">
                            <img class="h-full object-cover transition-all group-hover:scale-125" src="img/apa.jpg" alt="" />
                            <div class="invisible absolute inset-0 bg-gradient-to-b from-biru/20 to-black group-hover:visible">
                                <div class="absolute inset-x-5 bottom-6">
                                    <div class="flex gap-3 text-white">
                                            <div>
                                                <p class="font-sembold text-xl text-gray-100">WATERFALL</p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="group relative h-[30rem] w-[40rem] cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                        <a href="">
                            <img class="h-full object-cover transition-all group-hover:scale-125" src="https://cdn.pixabay.com/photo/2022/08/17/15/46/family-7392843_960_720.jpg" alt="" />
                        <div class="invisible absolute inset-0 bg-gradient-to-b from-biru/20 to-black group-hover:visible">
                            <div class="absolute inset-x-5 bottom-6">
                                <div class="flex gap-3 text-white">
                                    <div>
                                        <p class="font-sembold text-xl text-gray-100">MOUNTAIN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="group relative h-[30rem] w-[40rem] cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <a href="">
                        <img class="h-full object-cover transition-all group-hover:scale-125" src="https://cdn.pixabay.com/photo/2020/04/17/14/07/athlete-5055367_960_720.jpg" alt="" />
                      <div class="invisible absolute inset-0 bg-gradient-to-b from-biru/20 to-black group-hover:visible">
                        <div class="absolute inset-x-5 bottom-6">
                          <div class="flex gap-3 text-white">
                            <div>

                              <p class="font-sembold text-xl text-gray-100">LAKE</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>
                    <div class="group relative h-[30rem] w-[40rem] cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <a href="">
                      <img class="h-full object-cover transition-all group-hover:scale-125" src="https://cdn.pixabay.com/photo/2021/09/17/15/17/fruit-6633086_960_720.jpg" alt="" />
                      <div class="invisible absolute inset-0 bg-gradient-to-b from-biru/20 to-black group-hover:visible">
                        <div class="absolute inset-x-5 bottom-6">
                          <div class="flex gap-3 text-white">
                            <div>

                              <p class="font-sembold text-xl text-gray-100">FOREST</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>
                  </div>
                </div>
            </div>
    </section>



    <section>
        <div class="h-screen bg-white ">
            <div class="mx-auto max-w-1xl sm:px-6 lg:grid lg:max-w-5xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 ">
                <div class="aspect-w-3 aspect-h-4 rounded-lg relative overflow-hidden group">
                    <div class="h-full w-full bg-cover bg-local group-hover:scale-105 transition-all duration-500" style="background-image: url(img/1.jpg)">
                    </div>
                    <div class="w-full h-full bg-gradient-to-t from-black/50 invisible group-hover:visible transition-all duration-500 absolute bottom-0">
                        <p class="text-white absolute bottom-7 left-4">The Most Visited Waterfall in Bandung!</p>
                    </div>
                </div>
                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                  <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group relative">
                    <div class="h-full w-full bg-cover bg-local group-hover:scale-105 transition-all duration-500" style="background-image: url(img/1.jpg)">
                    </div>
                    <div class="w-full h-full bg-gradient-to-t from-black/50 invisible group-hover:visible transition-all duration-500 absolute bottom-0">
                        <p class="text-white pt-64 pl-5">The Most Visited Lake in Bandung</p>
                    </div>
                  </div>
                  <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group relative">
                    <div class="h-full w-full bg-cover bg-local group-hover:scale-105 transition-all duration-500" style="background-image: url(img/1.jpg)">
                    </div>
                    <div class="w-full h-full bg-gradient-to-t from-black/50 invisible group-hover:visible transition-all duration-500 absolute bottom-0 ">
                        <p class="text-white pt-64 pl-5">The Most Visited Forest in Bandung</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
@endsection
  @extends('dashboard.layouts.main')

  @section('container')

  <div class="flex flex-row">
    <div class="flex-auto ">
      <div class="flex flex-col">

        <div class="bg-blue-50 min-h-screen">
          <div class=" mt-8 grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10 ">
            <!--Grid starts here-->
            <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
              <div>
                <div class="text-sm text-gray-400 ">Check in Today</div>
                <div class="flex items-center pt-1">
                  <div class="text-3xl font-medium text-gray-600 ">34</div>
                </div>
              </div>
              <div class="text-pink-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </div>

            <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
              <div>
                <div class="text-sm text-gray-400 ">Check Out Today</div>
                <div class="flex items-center pt-1">
                  <div class="text-3xl font-medium text-gray-600 ">44</div>
                </div>
              </div>
              <div class="text-pink-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </div>

            <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
              <div>
                <div class="text-sm text-gray-400 ">Total Properties</div>
                <div class="flex items-center pt-1">
                  <div class="text-3xl font-medium text-gray-600 ">1000</div>
                </div>
              </div>
              <div class="text-pink-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path
                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
              </div>
            </div>

            <!-- Grid ends here..-->

          </div>



          <div class=" mt-5 grid  lg:grid-cols-3  md:grid-cols-3 p-4 gap-3">

            <div class="col-span-2 flex flex-col   p-8 bg-white rounded shadow-sm">
              <b class="flex flex-row text-gray-500">Property Release for today</b>
              <canvas class="p-5" id="chartLine"></canvas>
            </div>

            <div class=" flex flex-col   p-5 bg-white rounded shadow-sm">
              <b class="flex flex-row text-gray-500">Occupancy Percentage</b>
              <canvas class="p-5" id="chartRadar"></canvas>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>

        
  @endsection
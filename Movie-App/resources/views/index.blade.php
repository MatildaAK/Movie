@extends('layouts.main')

@section('content')
<section>
    <div class="pt-100 w-screen mx-auto">
      <div class="bg-nav">
        <div class="grid grid-cols-3 mt-[200px]">
              <div class="ml-4 my-4">

                </div>
                  <div class="my-4">
                      <a href="#">
                        <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
                      </a>
                  </div>

                  <div class="ml-8 my-4">
                      <a href="#">
                        <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
                      </a>
                  </div>

                </div>
              </div>
        </div>
        <div grid grid-cols-3 gap-x-4>
          <div class="ml-8 mb-4">
                <a href="#">
                  <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
              </div>

              <div class="ml-8 mb-4">
                <a href="#">
                  <img src="{{ Vite::asset('resources/images/insideOut.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
              </div>

              <div class="ml-8 mb-4">
                <a href="#">
                  <img src="{{ Vite::asset('resources/images/parasite.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
              </div>
        </div>
    </div>
  </div>
</section>

    <section>
      <div class="container mx-auto px-4">
        <div class="popular-movies bg-nav border-lg">
          <h2 class="uppercase tracking-wider text-white text-lg font-semibold ml-8 mt-8 mb-8">Watchlist</h2>
          <div class="grid grid-cols-6 gap-x-4">

            <div class="ml-8 mb-4">
              <a href="#">
                <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
            </div>

            <div class="ml-8 mb-4">
              <a href="#">
                <img src="{{ Vite::asset('resources/images/insideOut.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
            </div>

            <div class="ml-8 mb-4">
              <a href="#">
                <img src="{{ Vite::asset('resources/images/parasite.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
            </div>

            <div class="ml-8 mb-4">
              <a href="#">
                <img src="{{ Vite::asset('resources/images/overTheHedge.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
            </div>

            <div class="ml-8 mb-4">
              <a href="#">
                <img src="{{ Vite::asset('resources/images/spiderman3.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
            </div>

            <div class="ml-8 mb-4">
              <a href="#">
                <img src="{{ Vite::asset('resources/images/spidermanNoWayHome.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
            </div>

          </div>
        </div>
      </div>
      
    </section>

    <section>
      <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies bg-nav border-lg">
          <h2 class="uppercase tracking-wider text-white text-lg font-semibold ml-8 mt-8 mb-8">Action</h2>
          <div class="grid grid-cols-6 gap-x-4">
            <div class="ml-8 mb-4">
              <a href="#">
                <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies bg-nav border-lg">
          <h2 class="uppercase tracking-wider text-white text-lg font-semibold ml-8 mt-8 mb-8">Comedy</h2>
          <div class="grid grid-cols-6 gap-x-4">
            <div class="ml-8 mb-4">
              <a href="#">
                <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
@extends('layouts.main')

@section('content')
    <!-- <div class="pt-100 w-screen mx-auto">
      <div class="bg-nav pt-100">
        <div class="grid grid-cols-3 gap-4">
        <div class="ml-8 mb-4 w-1/3">
            <a href="#">
              <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool">
            </a>
        </div>
        <div class="ml-8 mb-4 w-2/3">
            <a href="#">
              <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool">
            </a>
        </div>
        </div>
    </div>
  </div>
</section>

    </div> -->

    <div class="container mx-auto px-4 pt-400">
      <div class="popular-movies bg-nav border-lg">
        <h2 class="uppercase tracking-wider text-white text-lg font-semibold ml-8 mt-8 mb-8">Watchlist</h2>
        <div class="grid grid-cols-6 gap-x-4">
          <div class="ml-8 mb-4">
            <a href="#">
              <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="container mx-auto px-4 pt-16">
      <div class="popular-movies bg-nav border-lg">
        <h2 class="uppercase tracking-wider text-white text-lg font-semibold ml-8 mt-8 mb-8">Watchlist</h2>
        <div class="grid grid-cols-6 gap-x-4">
          <div class="ml-8 mb-4">
            <a href="#">
              <img src="{{ Vite::asset('resources/images/deadpool.jpg') }}" alt="Deadpool">
            </a>
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
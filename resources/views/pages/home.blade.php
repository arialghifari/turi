@extends('layouts.app')

@section('title')
  Travel & Umroh Ari
@endsection

@section('content')
  <!-- HEADER -->
  <div class="header-container">
    <header class="text-center text-white bg-cover flex items-center justify-center h-full">
      <div class="">
        <h1 class="text-shadow text-4xl md:text-6xl md:space-y-4">
          <p>Dream. Seek. Experience</p>
          <p>The World</p>
        </h1>
        <p class="md:mt-4 text-shadow text-base md:text-xl">
          And Let Us Be In Your Journey
        </p>
        <p class="mt-4 md:mt-8">
          <a href="#popular-destination" class="text-sm md:text-lg px-3 py-2 md:px-4 md:py-3">Begin Journey</a>
        </p>
      </div>
    </header>
  </div>

  <!-- MAIN -->
  <main>
    <!-- STATISTIC -->
    <section class="statistic flex justify-center items-center">
      <div class="grid grid-cols-2 md:grid-cols-4 bg-white gap-4 md:gap-x-10 py-5 px-12 text-left">
        <div class="">
          <p class="text-left font-semibold text-2xl">20K</p>
          <p class="">MEMBERS</p>
        </div>
        <div class="">
          <p class="text-left font-semibold text-2xl">12</p>
          <p class="">COUNTRIES</p>
        </div>
        <div class="">
          <p class="text-left font-semibold text-2xl">3K</p>
          <p class="">HOTELS</p>
        </div>
        <div class="">
          <p class="text-left font-semibold text-2xl">72</p>
          <p class="">PARTNERS</p>
        </div>
      </div>
    </section>

    <!-- POPULAR DESTINATION -->
    <section class="popular-destination">
      <!-- popular destination title -->
      <div class="popular-title text-center flex flex-col justify-center items-center text-white space-y-2 sm:space-y-4">
        <p class="text-4xl sm:text-5xl font-bold" id="popular-destination">Popular Destination</p>
        <p class="text-base">
          something that you have never experienced before
        </p>
      </div>

      <!-- popular destination card -->
      <div class="card-destination flex justify-center items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          @foreach ($items as $item)
            <div class="card text-white text-center flex flex-col justify-between py-7 bg-cover bg-center rounded-sm"
            style="background-image: url('{{ $item->travel_galleries->count() ? Storage::url($item->travel_galleries->first()->image) : ( url('frontend/images/holder-card.png') ) }}')">
              <div>
                <div class="card-country">{{ $item->country }}</div>
                <div class="card-city text-2xl font-semibold">{{ $item->title }}</div>
              </div>
              <div class="card-btn-details">
                <a href="{{ route('details', $item->slug) }}" class="py-2 px-3">More Details</a>
              </div>
            </div>      
          @endforeach
        </div>
      </div>
    </section>

    <!-- PARTNERS -->
    <section class="partners flex content-center justify-center mt-6">
      <div class="cont grid grid-cols-1 lg:grid-cols-3">
        <div class="left text-center lg:text-left my-6 md:my-3">
          <p class="font-bold text-3xl sm:text-5xl">Partners</p>
          <p class="text-base sm:text-xl">
            That experience their<br />journey wth us
          </p>
        </div>
        <div class="right col-span-2 gap-2 place-items-center grid grid-cols-2 lg:grid-cols-4">
          <img class="lg:justify-self-end justify-self-end rounded-md bg-contain" title="Ana"
            src="{{ url('frontend/images/ana-logo.png') }}" alt="Ana" />
          <img class="lg:justify-self-end justify-self-start rounded-md bg-contain" title="Disney"
            src="{{ url('frontend/images/disney-logo.png') }}" alt="Disney" />
          <img class="lg:justify-self-end justify-self-end rounded-md bg-contain" title="Shangri La"
            src="{{ url('frontend/images/shangri-la-logo.png') }}" alt="Shangri La" />
          <img class="lg:justify-self-end justify-self-start rounded-md bg-contain" title="Visa"
            src="{{ url('frontend/images/visa-logo.png') }}" alt="Visa" />
        </div>
      </div>
    </section>

    <!-- REVIEWS -->
    <section class="review mt-20 flex justify-center bg-gradient-to-b from-white to-gray-100">
      <div class="cont h-full text-center">
        <div class="title space-y-1">
          <p class="font-bold text-3xl sm:text-5xl break-normal">
            Their Review
          </p>
          <p class="text-base sm:text-xl">the truth has been spoken</p>
        </div>
      </div>
    </section>
    <section class="review-card flex justify-center">
      <div class="card-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-4 lg:gap-0">
        <div
          class="card bg-white rounded-md border col-span-1 md:col-span-2 lg:col-span-1 border-gray-300 flex flex-col justify-between items-center">
          <div class="top pt-10 flex flex-col items-center text-center space-y-4 px-4">
            <div class="image">
              <img src="{{ url('frontend/images/user-1.png') }}" alt="" />
            </div>
            <p class="font-semibold text-lg">Adi Kurniadi</p>
            <p>" Words can't explain. I have to come back again "</p>
          </div>
          <div class="bottom w-full text-center flex justify-center items-center font-semibold">
            Trip to Bangkok, Thailand
          </div>
        </div>
        <div class="card bg-white rounded-md border border-gray-300 flex flex-col justify-between items-center">
          <div class="top pt-10 flex flex-col items-center text-center space-y-4 px-4">
            <div class="image">
              <img src="{{ url('frontend/images/user-2.png') }}" alt="" />
            </div>
            <p class="font-semibold text-lg">Oksa Candra</p>
            <p>
              " The landscape is very unique in its own way, I am taking every
              picture and its beautiful "
            </p>
          </div>
          <div class="bottom w-full text-center flex justify-center items-center font-semibold">
            Trip to Moscow, Rusia
          </div>
        </div>
        <div class="card bg-white rounded-md border border-gray-300 flex flex-col justify-between items-center">
          <div class="top pt-10 flex flex-col items-center text-center space-y-4 px-4">
            <div class="image">
              <img src="{{ url('frontend/images/user-3.png') }}" alt="" />
            </div>
            <p class="font-semibold text-lg">Bayu Arimbawa</p>
            <p>
              " Such a magical place to visit, unforgettable in every step "
            </p>
          </div>
          <div class="bottom w-full text-center flex justify-center items-center font-semibold">
            Trip to Bali, Indonesia
          </div>
        </div>
      </div>
    </section>

    <!-- BUTTONS -->
    <section class="button my-20 flex justify-center space-x-4">
      <a href="#" class="btn btn-help py-3 px-5 bg-gray-200 hover:bg-gray-300 rounded-sm text-gray-500">I Need Help</a>
      <a href="{{ route('login') }}" class="btn btn-begin py-3 px-5 bg-gray-400 rounded-sm text-white">Get Started</a>
    </section>
  </main>
@endsection

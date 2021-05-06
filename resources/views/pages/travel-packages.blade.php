@extends('layouts.app')

@section('title')
  Travel & Umroh Ari
@endsection

@section('content')

  <!-- MAIN -->
  <main>
    <!-- POPULAR DESTINATION -->
    <section class="popular-destination popular-destination-home">
      <!-- popular destination title -->
      <div class="popular-title text-center flex flex-col justify-center items-center text-white space-y-2 sm:space-y-4">
        <p class="text-4xl sm:text-5xl font-bold" id="popular-destination">Beautiful Destination</p>
        <p class="text-base">
          if something caught your eyes, it's a part of your journey
        </p>
      </div>

      <!-- popular destination card -->
      <div class="card-destination flex justify-center items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          @forelse ($items as $item)
            <div class="card card-popular text-white text-center flex flex-col justify-between py-7 bg-cover bg-center rounded-sm relative">
              <img loading="lazy" class="absolute top-0 w-full h-full object-cover" src="{{ $item->travel_galleries->count() ? Storage::url($item->travel_galleries->first()->image) : ( url('frontend/images/holder-card.png') ) }}" />
              <div class="gradient w-full h-full top-0 absolute"></div>
                <div class="z-10 title">
                  <div class="card-country">{{ $item->country }}</div>
                  <div class="card-city text-2xl font-semibold">{{ $item->title }}</div>
                </div>
                <div class="card-btn-details z-10">
                  <a href="{{ route('details', $item->slug) }}" class="py-2 px-3">More Details</a>
                </div>
            </div>
          @empty
            <div class="card text-white text-center flex flex-col justify-between py-7 bg-cover bg-center rounded-sm" style="background-image: url('frontend/images/holder-card.png') "></div>
            <div class="card text-white text-center flex flex-col justify-between py-7 bg-cover bg-center rounded-sm" style="background-image: url('frontend/images/holder-card.png') "></div>
            <div class="card text-white text-center flex flex-col justify-between py-7 bg-cover bg-center rounded-sm" style="background-image: url('frontend/images/holder-card.png') "></div>
            <div class="card text-white text-center flex flex-col justify-between py-7 bg-cover bg-center rounded-sm" style="background-image: url('frontend/images/holder-card.png') "></div>
          @endforelse
        </div>
      </div>
    </section>
  </main>

@endsection

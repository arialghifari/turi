@extends('layouts.app')

@section('title', 'Trip Details')

@section('content')
  <main class="mb-24">
    <!-- HEADER -->
    <section class="details-header bg-gray-100 flex justify-center items-center">
      <div class="cont">
        <div class="breadcrumbs flex flex-row text-sm sm:text-base space-x-2 sm:space-x-4 ml-7">
          <p class="breadcrumb-item font-light">Travel Destination</p>
          <p class="breadcrumb-item font-light">/</p>
          <p class="breadcrumb-item font-semibold">Details</p>
        </div>
      </div>
    </section>

    <section class="main-details flex justify-center items-center">
      <div class="cont grid grid-cols-12 gap-5 place-items-start px-2 md:px-4 lg:px-0">
        <!-- DETAILS DESTINATION (LEFT) -->
        <section
          class="details-destination border border-gray-300 bg-white col-span-12 lg:col-span-8 rounded-md p-7 w-full">
          <div class="main-title">
            <p class="font-semibold text-xl">{{ $item->title }}</p>
            <p class="text-gray-400 font-light">{{ $item->country }}</p>
          </div>
          <!-- IMAGE GALLERY -->
          <div class="main-image bg-black bg-cover my-2 flex justify-center items-center">
            <img
              src="{{ $item->travel_galleries->count() ? Storage::url( $item->travel_galleries->first()->image ) : url('frontend/images/holder-card.png') }}"
              class="w-auto" id="main-image" alt="" />
          </div>
          <div class="image-choice grid grid-cols-5 gap-1">
            @foreach ($item->travel_galleries as $thumb)
              <div class="image-thumbs flex items-center justify-center cursor-pointer border-4 border-white">
                <img
                src="{{ Storage::url($thumb->image) }}"
                class="object-cover object-center w-full max-h-10 sm:max-h-16" alt="" />
              </div>
            @endforeach
          </div>

          <!-- INSIGHT -->
          <div class="insight space-y-2 my-5">
            <p class="font-semibold text-xl">little insight about {{ $item->title }}</p>
            <p class="text-gray-500 leading-relaxed">
              {{ $item->about }}
            </p>
          </div>

          <!-- ACTIVITIES -->
          <div class="activities flex flex-col sm:flex-row items-start justify-between space-y-2 sm:space-y-0">
            <div class="featured-event flex items-center justify-center space-x-2">
              <img src="{{ url('frontend/images/ic-event.png') }}" alt="" class="bg-contain" />
              <div class="text-sm flex flex-col justify-between">
                <p class="font-light">Featured Event</p>
                <p class="font-semibold text-gray-600">
                  {{ $item->featured_event }}
                </p>
              </div>
            </div>
            <div class="featured-event flex items-center justify-center space-x-2">
              <img src="{{ url('frontend/images/ic-language.png') }}" alt="" class="bg-contain" />
              <div class="text-sm flex flex-col justify-between">
                <p class="font-light">Language</p>
                <p class="font-semibold text-gray-600"> {{ $item->language }}</p>
              </div>
            </div>
            <div class="featured-event flex items-center justify-center space-x-2">
              <img src="{{ url('frontend/images/ic-foods.png') }}" alt="" class="bg-contain" />
              <div class="text-sm flex flex-col justify-between">
                <p class="font-light">Foods</p>
                <p class="font-semibold text-gray-600"> {{ $item->foods }}</p>
              </div>
            </div>
          </div>
        </section>

        <!-- MEMBERS ARE GOING RIGHT -->
        <section class="members-going border border-gray-300 bg-white col-span-12 lg:col-span-4 rounded-md p-7 w-full">
          <div class="main-title">
            <p class="font-semibold text-xl">Members that are going</p>
          </div>

          <!-- MEMBER IMAGE -->
          <div class="member-image flex space-x-2 my-5">
            <div class="image">
              <img src="https://randomuser.me/api/portraits/women/2.jpg" class="rounded-full" alt="" />
            </div>
            <div class="image">
              <img src="https://randomuser.me/api/portraits/women/24.jpg" class="rounded-full" alt="" />
            </div>
            <div class="image">
              <img src="https://randomuser.me/api/portraits/women/25.jpg" class="rounded-full" alt="" />
            </div>
            <div class="image">
              <img src="https://randomuser.me/api/portraits/women/79.jpg" class="rounded-full" alt="" />
            </div>
            <div class="image bg-gray-200 rounded-full flex items-center justify-center font-semibold">
              9+
            </div>
          </div>

          <hr />

          <div class="trip-info">
            <p class="font-semibold text-xl my-3">Trip Informations</p>
            <div class="flex flex-row justify-between">
              <table class="table-auto w-full">
                <tr class="h-10">
                  <td class="font-semibold text-gray-500 px-2">
                    Date of Departure 
                  </td>
                  <td class="font-light text-right px-2">{{ \Carbon\Carbon::create($item->departure_date)->format('d M Y') }}</td>
                </tr>
                <tr class="h-10">
                  <td class="font-semibold text-gray-500 px-2">
                    Trip Duration
                  </td>
                  <td class="font-light text-right px-2">{{ $item->duration }}</td>
                </tr>
                <tr class="h-10">
                  <td class="font-semibold text-gray-500 px-2">Type</td>
                  <td class="font-light text-right px-2">{{ $item->type }}</td>
                </tr>
                <tr class="h-10">
                  <td class="font-semibold text-gray-500 px-2">Price</td>
                  <td class="font-light text-right px-2">${{ $item->price }} / person</td>
                </tr>
              </table>
            </div>
          </div>

          <div class="button-trip-info text-center mt-6">
            @auth
            <form action="{{ route('checkout-proccess', $item->id) }}" method="POST" class="cursor-pointer">
              @csrf
              <button
                type="submit"
                class="font-semibold text-lg text-white w-full inline-block rounded-sm py-2"
              >
                JOIN NOW
              </button>
            </form>
            @endauth
            @guest
              <a href="{{ route('login') }}"
              class="font-semibold text-lg text-white w-full inline-block rounded-sm py-2">Login or Register to Join</a>
            @endguest
          </div>
        </section>
      </div>
    </section>
  </main>
@endsection

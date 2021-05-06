@extends('layouts.app')

@section('title', 'Cart')

@section('content')
  <main class="mb-24">
    <!-- HEADER -->
    <section class="details-header bg-gray-100 flex justify-center items-center">
      <div class="cont">
        <div class="breadcrumbs flex flex-row text-sm sm:text-base space-x-2 sm:space-x-4 ml-7">
          <p class="breadcrumb-item font-semibold">Cart</p>
        </div>
      </div>
    </section>

    <section class="main-details flex justify-center items-center">
      <div class="cont grid grid-cols-12 gap-5 place-items-start px-2 md:px-4 lg:px-0">
        <!-- DETAILS DESTINATION (LEFT) -->
        <section
          class="details-destination border border-gray-300 bg-white col-span-12 rounded-md p-7 w-full">
          <div class="main-title">
            <p class="font-semibold text-xl">Title</p>
            <p class="text-gray-400 font-light">Sub</p>
          </div>
        </section>
      </div>
    </section>
  </main>
@endsection

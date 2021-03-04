@extends('layouts.admin')
@section('travel-package-active')
  <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
@endsection
@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid space-y-6 my-6">
    <div class="">
      <h2 class="text-sm font-medium text-gray-700"><a href="{{ route('travel-package.index') }}" class="underline text-blue-500">Travel Package</a> / Create</h2>
    </div>

  <!-- Form -->
    <form action="{{ route('travel-package.store') }}" method="POST">
    @csrf
      <div class="flex flex-col space-y-4 mb-8 px-4 py-3 bg-white rounded-lg shadow-md">
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Title *</span>
          <input
            class="block w-full my-1 text-sm focus:border-purple-400 focus:outline-none form-input"
            type="text" name="title" value="{{ old('title') }}" autofocus
          />
          @error('title') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Country *</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none form-input"
            type="text" name="country" value="{{ old('country') }}"
          />
          @error('country') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">About *</span>
          <textarea class="block w-full h-32 mt-1 text-sm focus:border-purple-400 focus:outline-none form-input" name="about">{{ old('about') }}</textarea>
          @error('about') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Featured Event *</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none form-input"
            type="text" name="featured_event" value="{{ old('featured_event') }}"
          />
          @error('featured_event') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Language *</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none form-input"
            type="text" name="language" value="{{ old('language') }}"
          />
          @error('language') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Foods *</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none form-input"
            type="text" name="foods" value="{{ old('foods') }}"
          />
          @error('foods') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 space-x-0 sm:space-x-2">
          <label class="text-sm w-full sm:w-2/5">
            <span class="text-gray-700 dark:text-gray-400">Departure Date *</span>
            <input
              class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none form-input"
              type="date" name="departure_date" value="{{ old('departure_date') }}"
            />
            @error('departure_date') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
          </label>
          <label class="text-sm w-full sm:w-3/5">
            <span class="text-gray-700 dark:text-gray-400">Duration *</span>
            <input
              class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none form-input"
              type="text" name="duration" value="{{ old('duration') }}"
            />
            @error('duration') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
          </label>
        </div>
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Type *</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none form-input"
            type="text" name="type" value="{{ old('type') }}"
          />
          @error('type') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Price ($) *</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none form-input"
            type="number" name="price" value="{{ old('price') }}"
          />
          @error('price') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        
        <div class="flex flex-col sm:flex-row text-sm space-x-0 sm:space-x-2 space-y-1 sm:space-y-0">
          <button class="bg-purple-500 hover:bg-purple-600 w-full p-3 rounded-md text-white" type="submit">
            SAVE
          </button>
          <a href="{{ route('travel-package.index') }}" class="text-gray-600 hover:text-gray-700 underline p-3 rounded-md text-center">CANCEL</a>
        </div>
      </div>
    </form>
  </div>
</main>
@endsection

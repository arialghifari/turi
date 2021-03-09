@extends('layouts.admin')
@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid space-y-6 my-6">
    <div class="">
      <h2 class="text-sm font-medium text-gray-700"><a href="{{ route('travel-gallery.index') }}" class="underline text-blue-500">Travel Gallery</a> / Create</h2>
    </div>

  <!-- Form -->
    <form action="{{ route('travel-gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="flex flex-col space-y-4 mb-8 px-4 py-3 bg-white rounded-lg shadow-md">
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Travel Package *</span>
          <select name="travel_packages_id" class="block w-full my-1 text-sm focus:border-purple-400 focus:outline-none form-input">
            <option selected disabled>Select travel package</option>
            @forelse ($travel_packages as $travel_package)
              <option 
                value="{{ $travel_package->id }}" 
                {{ ($travel_package->id == old('travel_packages_id')) ? 'selected' : ''}}
              >
                  {{ $travel_package->id }} | {{ $travel_package->title }}
              </option>
            @empty
              <option selected disabled>There is no travel package available</option>
            @endforelse
          </select>
          @error('travel_packages_id') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Image *</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none form-input"
            type="file" name="image" value="{{ old('image') }}"
          />
          @error('image') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        
        <div class="flex flex-col sm:flex-row text-sm space-x-0 sm:space-x-2 space-y-1 sm:space-y-0">
          <button class="bg-purple-500 hover:bg-purple-600 w-full p-3 rounded-md text-white" type="submit">
            SAVE
          </button>
          <a href="{{ route('travel-gallery.index') }}" class="text-gray-600 hover:text-gray-700 underline p-3 rounded-md text-center">CANCEL</a>
        </div>
      </div>
    </form>
  </div>
</main>
@endsection

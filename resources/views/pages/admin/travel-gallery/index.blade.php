@extends('layouts.admin')
@section('travel-gallery-active')
  <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
@endsection
@section('content')
<main class="h-full overflow-y-auto ">
  <div class="container px-6 mx-auto grid my-6">
    <div class="mb-2 flex flex-col sm:flex-row justify-between items-center">
      <h2 class="text-xl font-semibold text-gray-700">Travel Gallery</h2>
      <a href="{{ route('travel-gallery.create') }}" class="flex items-center my-2 text-xs rounded-md bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 space-x-1">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        <span>ADD TRAVEL GALLERY</span>
      </a>
    </div>
    
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
              <th class="px-4 py-3">ID</th>
              <th class="px-4 py-3">TRAVEL PACKAGE</th>
              <th class="px-4 py-3 text-center">IMAGE</th>
              <th class="px-4 py-3 text-center">ACTIONS</th>
            </tr>
          </thead>
          <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 text-sm"
          >
            @forelse ($items as $item)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">{{ $item->id }}</td>
              <td class="px-4 py-3">{{ $item->travel_package->title }}</td>
              <td class="px-4 py-3 flex justify-center items-center">
                <a href="{{ Storage::url($item->image) }}" target="_blank">
                  <img src="{{ Storage::url($item->image) }}" class="rounded-sm w-28 h-28 object-center object-contain bg-gray-200 cursor-pointer">
                </a>
              </td>
              <td class="px-4 py-3">
                <div class="flex items-center text-sm space-x-1 justify-center">
                  <a href="{{ route('travel-gallery.edit', $item->id) }}">
                    <button
                      class="flex items-center justify-between p-0.5 text-sm font-medium leading-5 text-purple-600 hover:text-purple-400 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Edit"
                      title="Edit"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                    </button>
                  </a>
                  <form action="{{ route('travel-gallery.destroy', $item->id) }}" method="POST">
                  @csrf
                  @method("DELETE")
                    <button
                      type="submit"
                      class="flex items-center justify-between p-0.5 text-sm font-medium leading-5 text-purple-600 hover:text-purple-400 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete"
                      title="Delete"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </button>
                  </form>
                </div>
              </td>
            </tr>   
            @empty
                <tr>
                  <td colspan="7" class="px-4 py-3 text-center">No data available</td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
@endsection

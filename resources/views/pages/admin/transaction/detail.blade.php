@extends('layouts.admin')
@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid space-y-6 my-6">
    <div class="">
      <h2 class="text-sm font-medium text-gray-700"><a href="{{ route('transaction.index') }}" class="underline text-blue-500">Transaction</a> / Detail / {{ $item->id }}</h2>
    </div>

  <!-- Form -->
    <div class="flex flex-col space-y-4 mb-8 px-4 py-3 bg-white rounded-lg shadow-md text-gray-600 text-sm">
      <table class="">
        <tr>
          <td class="border p-2 font-semibold">ID</td>
          <td class="border p-2">{{ $item->id }}</td>
        </tr>
        <tr>
          <td class="border p-2 font-semibold">Travel Package</td>
          <td class="border p-2">{{ $item->travel_package->title }}</td>
        </tr>
        <tr>
          <td class="border p-2 font-semibold">Customer Name (username)</td>
          <td class="border p-2">{{ $item->user->name }} ({{ $item->user->username }})</td>
        </tr>
        <tr>
          <td class="border p-2 font-semibold">Additional Visa</td>
          <td class="border p-2">${{ $item->additional_visa }}</td>
        </tr>
        <tr>
          <td class="border p-2 font-semibold">Total Transaction</td>
          <td class="border p-2">${{ $item->transaction_total }}</td>
        </tr>
        <tr>
          <td class="border p-2 font-semibold">Transaction Status</td>
          <td class="border p-2">{{ $item->transaction_status }}</td>
        </tr>
        <tr>
          <td class="border p-2 font-semibold"><span class="">Purchase</span></td>
          <td class="border p-2">
            <table class="w-full">
              <tr>
                <td class="border p-2 font-semibold">ID</td>
                <td class="border p-2 font-semibold">Username</td>
                <td class="border p-2 font-semibold">Nationality</td>
                <td class="border p-2 font-semibold">Visa</td>
                <td class="border p-2 font-semibold">Doe Passport</td>
              </tr>
              @foreach ($item->details as $item)
              <tr>
                <td class="border p-2">{{ $item->id }}</td>
                <td class="border p-2">{{ $item->username }}</td>
                <td class="border p-2">{{ $item->nationality }}</td>
                <td class="border p-2">{{ $item->is_visa ? '30 Days' : 'N/A' }}</td>
                <td class="border p-2">{{ $item->doe_passport }}</td>
              </tr>
              @endforeach
            </table>
          </td>
        </tr>
      </table>
      
      <div class="flex flex-col sm:flex-row text-sm space-x-0 sm:space-x-2 space-y-1 sm:space-y-0">
        <a href="{{ route('transaction.index') }}" class="bg-purple-500 hover:bg-purple-600 w-full p-3 rounded-md text-white text-center"> 
          BACK
        </a>
      </div>
    </div>
  </div>
</main>
@endsection

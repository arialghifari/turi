@extends('layouts.admin')
@section('transaction-active')
  <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
@endsection
@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid space-y-6 my-6">
    <div class="">
      <h2 class="text-sm font-medium text-gray-700"><a href="{{ route('transaction.index') }}" class="underline text-blue-500">Transaction</a> / Edit</h2>
    </div>

  <!-- Form -->
    <form action="{{ route('transaction.update', $item->id) }}" method="POST">
    @csrf
    @method("PUT")
      <div class="flex flex-col space-y-4 mb-8 px-4 py-3 bg-white rounded-lg shadow-md">
        <label class="text-sm">
          <span class="text-gray-700 dark:text-gray-400">Transaction Status *</span>
          <select name="transaction_status" class="block w-full my-1 text-sm focus:border-purple-400 focus:outline-none form-input">
            <option disabled>Select Transaction Status</option>
            
            <option {{ ('PENDING' == $item->transaction_status) ? 'selected' : '' }} value="PENDING">PENDING</option>
            <option {{ ('SUCCESS' == $item->transaction_status) ? 'selected' : '' }} value="SUCCESS">SUCCESS</option>
            <option {{ ('CANCELED' == $item->transaction_status) ? 'selected' : '' }} value="CANCELED">CANCELED</option>
            <option {{ ('FAILED' == $item->transaction_status) ? 'selected' : '' }} value="FAILED">FAILED</option>
          </select>
          @error('transaction_status') <div class="text-xs text-red-500">{{ $message }}</div> @enderror
        </label>
        
        <div class="flex flex-col sm:flex-row text-sm space-x-0 sm:space-x-2 space-y-1 sm:space-y-0">
          <button class="bg-purple-500 hover:bg-purple-600 w-full p-3 rounded-md text-white" type="submit">
            UPDATE
          </button>
          <a href="{{ route('transaction.index') }}" class="text-gray-600 hover:text-gray-700 underline p-3 rounded-md text-center">CANCEL</a>
        </div>
      </div>
    </form>
  </div>
</main>
@endsection

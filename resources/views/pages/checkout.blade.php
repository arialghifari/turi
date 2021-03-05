@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')
  <main class="mb-24">
    <!-- HEADER -->
    <section
      class="details-header bg-gray-100 flex justify-center items-center"
    >
      <div class="cont">
        <div
          class="breadcrumbs flex flex-row text-sm sm:text-base space-x-2 sm:space-x-4 ml-7"
        >
          <p class="breadcrumb-item font-light">Travel Destination</p>
          <p class="breadcrumb-item font-light">/</p>
          <p class="breadcrumb-item font-light">Details</p>
          <p class="breadcrumb-item font-light">/</p>
          <p class="breadcrumb-item font-semibold">Checkout</p>
        </div>
      </div>
    </section>

    <section class="main-details flex justify-center items-center">
      <div
        class="cont grid grid-cols-12 gap-5 place-items-start px-2 md:px-4 lg:px-0"
      >
        <!-- WHO'S GOING (LEFT) -->
        <section
          class="who-is-going border border-gray-300 bg-white col-span-12 lg:col-span-8 rounded-md p-7 w-full"
        >
          <div class="main-title">
            <p class="font-semibold text-xl">Who's going?</p>
            <p class="text-gray-400 font-light">Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->country }}</p>
          </div>

          <div class="user-going mt-4 border border-gray-200">
            <table class="w-full">
              <tr>
                <td class="font-light"><a>Members</a></td>
                <td class="font-light">Name</td>
                <td class="font-light">Nationality</td>
                <td class="font-light">VISA</td>
                <td class="font-light">Passport</td>
                <td class="font-light"></td>
              </tr>
              @forelse ($item->details as $detail)
                <tr>
                  <td>
                    <img
                      src="https://ui-avatars.com/api/?name={{ $detail->username }}"
                      class="rounded-full"
                      alt=""
                    />
                  </td>
                  <td>{{ $detail->username }}</td>
                  <td>{{ $detail->nationality }}</td>
                  <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                  <td>
                    {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                  </td>
                  <td>
                    <a href="{{ route('checkout-remove', $detail->id) }}" class="flex justify-end">
                      <svg
                        width="22"
                        height="22"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#061D51"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </a>
                  </td>
                </tr>
              @empty
              <tr>
                <td colspan="6" class="text-center">
                  No visitior
                </td>
              </tr>
              @endforelse
            </table>
          </div>

          <div class="add-member space-y-0.5 mt-3">
            <div class="title font-semibold">Add Member</div>
            <form action="{{ route('checkout-create', $item->id) }}" method="POST">
            @csrf
              <div class="form-wrap">
                <form
                  action=""
                  class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 justify-between"
                >
                  <input
                    type="text"
                    placeholder="Username"
                    name="username"
                    required
                    class="text-sm text-gray-700 border border-gray-300 rounded-md py-2 lg:py-1 px-2"
                  />
                  <select
                    id="visa"
                    name="is_visa"
                    required
                    class="text-sm text-gray-700 border border-gray-300 rounded-md py-2 lg:py-1 px-2"
                  >
                    <option selected disabled hidden>Select Visa</option>
                    <option hidden>This is just placeholder</option>
                    <option value="1">30 Days</option>
                    <option value="0">N/A</option>
                  </select>
                  <input
                    type="text"
                    placeholder="Nationality"
                    name="nationality"
                    required
                    class="text-sm text-gray-700 border border-gray-300 rounded-md py-2 lg:py-1 px-2"
                  />
                  <input
                    type="date"
                    placeholder="DOE Passport"
                    name="doe_passport"
                    required
                    class="text-sm text-gray-700 border border-gray-300 rounded-md py-2 lg:py-1 px-2"
                  />

                  <button
                    type="submit"
                    class="text-white mt-2 py-2 px-3 rounded-md text-sm"
                  >
                    ADD NOW
                  </button>
                </form>
              </div>
            </form>
          </div>

          <div class="note text-sm mt-1">
            <p class="text-gray-500 font-light">
              * You are only be able to invite member that has been registered
              in TURI.COM
            </p>
          </div>
        </section>

        <!-- TRIP INFORMATIONS (RIGHT) -->
        <section
          class="trip-info-details border border-gray-300 bg-white col-span-12 lg:col-span-4 rounded-md p-7 w-full"
        >
          <div class="main-title">
            <p class="font-semibold text-xl">Checkout Informations</p>
          </div>

          <div class="trip-info">
            <div class="flex flex-row justify-between my-6">
              <table class="table-auto w-full">
                <tr class="h-10">
                  <td class="font-semibold text-gray-500 px-2">Members</td>
                  <td class="font-light text-right px-2">{{ $item->details->count() }} Person</td>
                </tr>
                <tr class="h-10">
                  <td class="font-semibold text-gray-500 px-2">
                    Additional VISA
                  </td>
                  <td class="font-light text-right px-2">$ {{ $item->additional_visa }},00</td>
                </tr>
                <tr class="h-10">
                  <td class="font-semibold text-gray-500 px-2">Trip Price</td>
                  <td class="font-light text-right px-2">$ {{ $item->travel_package->price }},00 / person</td>
                </tr>
                <tr class="h-10">
                  <td class="font-semibold text-gray-500 px-2">Sub Total</td>
                  <td class="font-light text-right px-2">$ {{ $item->transaction_total }},00</td>
                </tr>
                <tr class="h-10">
                  <td class="font-bold text-gray-500 px-2">
                    Total + Unique Code
                  </td>
                  <td class="font-bold text-lg text-right px-2">
                    $ {{ $item->transaction_total }},<span>{{ mt_rand(0,99) }}</span>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <hr />

          <div class="payments mt-3">
            <div class="title">
              <p class="text-xl font-semibold">Payments</p>
              <p class="text-gray-400 font-light">
                Complete the payment before unfold your wonderful journey
              </p>
            </div>
            <div class="banks space-y-4 my-5 text-sm font-semibold">
              <div class="bank flex space-x-2 items-center">
                <div class="icon">
                  <img src="{{ url('frontend/images/ic-bank.png') }}" alt="" />
                </div>
                <div class="-space-y-0.5">
                  <p>PT TURI INDONESIA</p>
                  <p>8686 8686 8686</p>
                  <p>Bank Central Asia</p>
                </div>
              </div>
              <div class="bank flex space-x-2 items-center">
                <div class="icon">
                  <img src="{{ url('frontend/images/ic-bank.png') }}" alt="" />
                </div>
                <div class="-space-y-0.5">
                  <p>PT TURI INDONESIA</p>
                  <p>1212 1212 1212</p>
                  <p>Bank Republic Indonesia</p>
                </div>
              </div>
            </div>
          </div>

          <div class="button-already-paid text-center space-y-4">
            <a
              href="{{ route('checkout-success', $item->id) }}"
              class="font-semibold text-lg text-white w-full inline-block rounded-sm py-2"
              >I ALREADY PAID</a
            >
            <a
              href="{{ route('details', $item->travel_package->slug) }}"
              class="underline text-base text-gray-400 hover:text-gray-500 w-full inline-block rounded-sm"
              >Cancel Booking</a
            >
          </div>
        </section>
      </div>
    </section>
  </main>
@endsection

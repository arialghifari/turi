@extends('layouts.success-checkout')

@section('title', 'Success Checkout')

@section('content')
  <main class="success-checkout">
    <!-- HEADER -->
    <section
      class="flex flex-col justify-center items-center h-screen w-full space-y-3 text-center"
    >
      <img
        src="{{ url('frontend/images/mail-illustrator.png') }}"
        alt=""
        class="w-52 sm:w-auto"
      />
      <p class="font-semibold text-2xl">Yay! Success</p>
      <p class="font-light text-lg">
        We have sent you an email for trip instruction
      </p>
      <a href="{{ route('home') }}" class="text-white font-semibold py-1.5 px-4 rounded-md"
        >Home Page</a
      >
    </section>
  </main>
@endsection

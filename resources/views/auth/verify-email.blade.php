@extends('components.auth')

@section('content')
  <form action="{{ route('verification.send') }}" method="POST" class="space-y-3 w-full">
    @csrf
    <div class="logo flex flex-col justify-center items-center my-5">
      <a href="{{ route('home') }}">
        <img src="{{ url('frontend/images/turi-logo.png') }}" class="object-contain" alt="" />
      </a>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="flex flex-col space-y-1 text-gray-500 text-center text-sm">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
    </div>
    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif
    <div class="btn-signin">
      <button type="submit" class="text-center text-white tracking-wide rounded-sm text-wh ite py-2 w-full">
        RESEN VERIFICATION EMAIL
      </button>
    </div>
  </form>
  </div>
@endsection

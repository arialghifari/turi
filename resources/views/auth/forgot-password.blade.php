@extends('components.auth')

@section('content')
  <form action="{{ route('password.email') }}" method="POST" class="space-y-3 w-full">
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
    <div class="text-sm text-gray-500 max-w-xs">
      <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
    </div>
    <div class="email flex flex-col space-y-1 text-gray-600 font-light">
      <label for="email">Email</label>
      <input value="{{ old('email') }}" required type="email" id="email" name="email" class="w-full py-2 px-2 rounded-sm border border-gray-300" />
    </div>
    <div class="btn-signin">
      <button type="submit" class="text-center text-white tracking-wide rounded-sm text-wh ite py-2 w-full">
        EMAL PASSWORD RESET LINK
      </button>
    </div>
    <div class="forgot-pass flex justify-evenly text-sm text-center underline">
      <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-600">Back</a>
    </div>
  </form>
  </div>
@endsection
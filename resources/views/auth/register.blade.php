@extends('components.auth')

@section('content')
<form action="{{ route('register') }}" method="POST" class="space-y-1.5 w-full">
@csrf
  <div class="logo flex flex-col justify-center items-center">
    <a href="{{ route('home') }}">
      <img src="{{ url('frontend/images/turi-logo.png') }}" class="object-contain" alt="" />
    </a>
  </div>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />
  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

  <div class="flex flex-col space-y-1 text-gray-600 font-light">
    <label for="name">Name</label>
    <input value="{{ old('name') }}" required type="name" id="name" name="name" class="text-sm w-full py-1 px-1 rounded-sm border border-gray-300" />
  </div>
  <div class="flex flex-col space-y-1 text-gray-600 font-light">
    <label for="username">Username</label>
    <input value="{{ old('username') }}" required type="username" id="username" name="username" class="text-sm w-full py-1 px-1 rounded-sm border border-gray-300" />
  </div>
  <div class="email flex flex-col space-y-1 text-gray-600 font-light">
    <label for="email">Email</label>
    <input value="{{ old('email') }}" required type="email" id="email" name="email" class="text-sm w-full py-1 px-1 rounded-sm border border-gray-300" />
  </div>
  <div class="password flex flex-col space-y-1 text-gray-600 font-light">
    <label for="password">Password</label>
    <input required type="password" id="password" name="password"
      class="text-sm w-full py-1 px-1 rounded-sm border border-gray-300 tracking-widest" />
  </div>
  <div class="flex flex-col space-y-1 text-gray-600 font-light">
    <label for="password_confirmation">Confirm Password</label>
    <input required type="password" id="password_confirmation" name="password_confirmation"
      class="text-sm w-full py-1 px-1 rounded-sm border border-gray-300 tracking-widest" />
  </div>
  <div class="btn-signin">
    <button type="submit" class="mt-2 text-center text-white tracking-wide rounded-sm text-wh ite py-2 w-full">
      SIGN IN
    </button>
  </div>
  <div class="forgot-pass flex justify-evenly text-sm text-center underline">
    <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-600">Already registered?</a>
  </div>
</form>
</div>
@endsection

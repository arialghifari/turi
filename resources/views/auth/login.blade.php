@extends('components.auth')

@section('content')
  <form action="{{ route('login') }}" method="POST" class="space-y-3 w-full">
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
    <div class="email flex flex-col space-y-1 text-gray-600 font-light">
      <label for="email">Email</label>
      <input value="{{ old('email') }}" required type="email" id="email" name="email" class="w-full py-2 px-2 rounded-sm border border-gray-300" />
    </div>
    <div class="password flex flex-col space-y-1 text-gray-600 font-light">
      <label for="password">Password</label>
      <input required type="password" id="password" name="password"
        class="w-full py-2 px-2 rounded-sm border border-gray-300 tracking-widest" />
    </div>
    <div class="remember-me text-gray-600 font-light space-x-1">
      <input class="" type="checkbox" name="remember" id="remember-me" />
      <label for="remember-me">Remember Me</label>
    </div>
    <div class="btn-signin">
      <button type="submit" class="text-center text-white tracking-wide rounded-sm text-wh ite py-2 w-full">
        SIGN IN
      </button>
    </div>
    <div class="forgot-pass flex justify-evenly text-sm text-center underline">
      <a href="{{ route('password.request') }}" class="text-gray-500 hover:text-gray-600">forgot
        password</a>
      <a href="{{ route('register') }}" class="text-gray-500 hover:text-gray-600">i don't have
        account</a>
    </div>
  </form>
  </div>
@endsection

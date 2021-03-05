@extends('components.auth')

@section('content')
  <form action="{{ route('password.update') }}" method="POST" class="space-y-3 w-full">
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
    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <div class="email flex flex-col space-y-1 text-gray-600 font-light">
      <label for="email">Email</label>
      <input value="{{ old('email', $request->email) }}" required type="email" id="email" name="email" class="w-full py-2 px-2 rounded-sm border border-gray-300" />
    </div>
    <div class="password flex flex-col space-y-1 text-gray-600 font-light">
      <label for="password">Password</label>
      <input required type="password" id="password" name="password"
        class="w-full py-2 px-2 rounded-sm border border-gray-300 tracking-widest" />
    </div>
    <div class="password_confirmation flex flex-col space-y-1 text-gray-600 font-light">
        <label for="password_confirmation">Confirm Password</label>
        <input required type="password" id="password_confirmation" name="password_confirmation" class="w-full py-2 px-2 rounded-sm border border-gray-300 tracking-widest" />
    </div>
    <div class="btn-signin">
      <button type="submit" class="text-center text-white tracking-wide rounded-sm text-wh ite py-2 w-full">
        RESET PASSWORD
      </button>
    </div>
  </form>
  </div>
@endsection
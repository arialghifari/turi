<!-- NAVBAR -->
<div class="container-nav flex mx-auto">
  <nav class="nav flex justify-between mx-auto">
    <!-- Desktop Nav  -->
    <div class="nav-left self-center mx-6">
      <a href="{{ route('home') }}">
        <img class="" src="{{ url('frontend/images/turi-logo.png') }}" alt="TURI" />
      </a>
    </div>

    <div class="nav-right hidden md:flex items-center">
      <a class="mx-2 p-2 text-lg {{ request()->is('/') ? 'font-semibold' : 'font-light' }}" href="{{ route('home') }}">Home</a>
      <a class="mx-2 p-2 text-lg {{ request()->is('travel-packages*') ? 'font-semibold' : 'font-light' }}" href="{{ route('travel-packages') }}">Travel Packages</a>
      <div class="dropdown relative">
        <button id="btn-services" class="mx-2 p-2 text-lg flex items-center font-light" href="#">
          Services
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#061D51" stroke-width="1"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 9l6 6 6-6" />
          </svg>
        </button>

        <div id="dropdown-menu" class="hidden right-1 bg-white rounded-sm w-48 border border-gray-300 font-light">
          <a class="block m-1 py-1 px-5 hover:bg-gray-100" href="#">Link 1</a>
          <a class="block m-1 py-1 px-5 hover:bg-gray-100" href="#">Link 2</a>
          <a class="block m-1 py-1 px-5 hover:bg-gray-100" href="#">Link 3</a>
        </div>
      </div>
      <a class="mx-2 p-2 text-lg font-light" href="#">Testimonial</a>

      @guest
      <a href="{{ route('login') }}" class="h-full">
        <button class="text-white h-full text-xl btn-signin">
          SIGN IN
        </button>
      </a>
      @endguest
      
      @auth
      <form action="{{ route('logout') }}" method="POST" class="h-full">
        @csrf
        <button type="submit" class="text-white h-full text-xl btn-signin">
            LOGOUT
        </button>
      </form>
      @endauth
    </div>

    <!-- Mobile Nav -->
    <div id="hamburger-nav" class="hamburger-menu flex md:hidden items-center mr-6">
      <a href="#">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#061D51" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </a>
    </div>

    <div id="mobile-nav" class="nav-hamburger-link z-20 hidden top-0 bg-gray-200 h-full w-full text-center">
      <!-- close icon  -->
      <div id="close-icon" class="absolute top-4 right-3">
        <a href="#" class="">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#061D51" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </a>
      </div>
      <!-- link  -->
      <div class="flex w-full h-full flex-col items-center justify-center">
        <a href="{{ route('home') }}" class="text-xl hover:bg-gray-50 w-full py-1 my-1 {{ request()->is('/') ? 'font-semibold' : '' }}">Home</a>
        <a href="{{ route('travel-packages') }}" class="text-xl hover:bg-gray-50 w-full py-1 my-1 {{ request()->is('travel-packages*') ? 'font-semibold' : '' }}">Travel Packages</a>
        <a href="#" id="services-mobile"
          class="text-xl hover:bg-gray-50 w-full py-1 my-1 flex items-center justify-center">
          <div class="flex items-center justify-center">
            Services
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#061D51" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </div>
        </a>
        <div id="services-mobile-menu" class="hidden flex-col w-full">
          <a href="#" class="hover:bg-gray-50">Link 1</a>
          <a href="#" class="hover:bg-gray-50">Link 2</a>
          <a href="#" class="hover:bg-gray-50">Link 3</a>
        </div>
        <a href="#" class="text-xl hover:bg-gray-50 w-full py-1 my-1">Testimonial</a>
        @guest
          <a href="{{ route('login') }}" class="text-white sign-in-mobile text-xl py-1 px-6 my-1">
            <button>SIGN IN</button>
          </a>
        @endguest
        @auth
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="text-white sign-in-mobile text-xl py-1 px-6 my-1">
              LOGOUT
            </button>
          </form>
        @endauth
      </div>
    </div>
  </nav>
</div>

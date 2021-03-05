<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TURI — Travel & Umroh Ari</title>
    <link
      rel="shortcut icon"
      href="{{ url('frontend/images/turi.ico') }}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{ url('frontend/styles/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/styles/app.min.css') }}" />
  </head> 
  <body>
    <!-- MAIN -->
    <main>
      <section class="sign-in flex justify-center items-center p-7 h-screen">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
          <div class="left flex flex-col items-center justify-center space-y-3">
            <div class="title">
              <h1 class="inline-block font-bold text-4xl text-center">
                Dream. Seek. Experience
              </h1>
            </div>
            <div
              class="cont-img hidden lg:grid grid-cols-1 sm:grid-cols-2 grid-rows-3 gap-3"
            >
              <div class="item bg-yellow-200 sm:row-span-2">
                <img
                  class="w-full h-full object-cover object-center"
                  src="{{ url('frontend/images/login_a.png') }}"
                  alt=""
                />
              </div>
              <div class="item bg-yellow-200">
                <img
                  class="w-full h-full object-cover object-center"
                  src="{{ url('frontend/images/login_b.png') }}"
                  alt=""
                />
              </div>
              <div class="item bg-yellow-200 sm:row-span-2">
                <img
                  class="w-full h-full object-cover object-center"
                  src="{{ url('frontend/images/login_c.png') }}"
                  alt=""
                />
              </div>
              <div class="item bg-yellow-200">
                <img
                  class="w-full h-full object-cover object-bottom"
                  src="{{ url('frontend/images/login_d.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
          
          <div class="right z-10 flex flex-col items-center justify-center">
            <div
              class="wrap flex flex-col items-center justify-center p-4 rounded-md border border-gray-300 w-full lg:w-7/12 bg-white"
            >
            @yield('content')
          </div>
        </div>
      </section>
    </main>

    <script src="frontend/scripts/main.js"></script>
  </body>
</html>
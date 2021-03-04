<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Turi Admin</title>
  @include('includes.admin.style')
</head>

<body>
  <div class="flex h-screen bg-gray-100 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    @include('includes.admin.sidebar')
    <div class="flex flex-col flex-1 w-full">
      @include('includes.admin.navbar')
      @yield('content')
    </div>
  </div>
</body>

</html>

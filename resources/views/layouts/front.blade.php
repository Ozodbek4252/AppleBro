<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('components.front_links')

</head>
<body>

  @include('components.front_basket')
  @include('components.front_favourite')
  @include('components.front_mobile-menu')
  @include('components.front_header')
  

  @yield('content')

  @include('components.front_footer')
  @include('components.front_scripts')
</body>
</html>








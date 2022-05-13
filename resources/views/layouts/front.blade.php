<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <base href="/public">
  @include('components.front_links')
  @include('components.front_scripts')
</head>
<body>

  @include('components.front_basket')
  @include('components.front_favourite')
  @include('components.front_mobile-menu')
  @include('components.front_header')
  

  @yield('content')

  @if(\Request::route()->getName() != 'front.profile')
    @include('components.front_footer')
  @endif
  
</body>
</html>








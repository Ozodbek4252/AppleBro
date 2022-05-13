<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('components.front_links')
  @yield('style')
  
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
  @include('components.front_basket')
  @include('components.front_favourite')
  @include('components.front_mobile-menu')
  @include('components.front_header')

  {{ isset($slot) ? $slot : ''}}
  @yield('content')
  
  @if(\Request::route()->getName() != 'front.profile')
    @include('components.front_footer')
  @endif
  
  @include('components.front_scripts')
  @yield('scripts')
  @stack('modals')
</body>
</html>








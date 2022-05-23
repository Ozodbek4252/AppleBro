<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('components.front_links')
  @yield('style')
  
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
  @include('components.front_cart')
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


  <script>
    function addToCart() {
      $('#cart_count').html('asdasdasdasdasd');
      $('#cart_count').load('/cart_count');
    }
  </script>
  
</body>
</html>








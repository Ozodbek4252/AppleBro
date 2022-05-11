<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('components.styles')
  @yield('style')

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
  <div id="layout-wrapper">
    @include('components.header')
    @include('components.sidebar')
    
    <div class="main-content">
      
      <div class="page-content">
        <main>
          {{ isset($slot) ? $slot : ''}}
          @yield('content')
        </main>
      </div>
      
      @include('components.footer')
    </div>
    
  </div>
  
  @include('components.scripts')
  @yield('scripts')
  @stack('modals')
</body>
</html>

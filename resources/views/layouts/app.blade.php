<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('components.styles')
  @yield('style')
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
  @yield('modal')
  
  @include('components.scripts')
  <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
  @yield('scripts')
  @stack('modals')
</body>
</html>

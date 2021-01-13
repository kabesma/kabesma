<div class="wrapper ">
  @include('main.sidebar')
  <div class="main-panel">
    @include('main.navbar')
    @yield('content')
    @include('main.footer')
  </div>
</div>

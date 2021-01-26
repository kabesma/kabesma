<div class="wrapper ">
  @include('main.menu')
  <div class="main-panel">
    @include('main.navbar')
    @yield('content')
    @include('main.footer')
  </div>
</div>

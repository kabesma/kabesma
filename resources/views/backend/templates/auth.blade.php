<div class="wrapper ">
  @include('navbars.sidebar')
  <div class="main-panel">
    @include('navbars.navs.auth')
    @yield('content')
    @include('footers.auth')
  </div>
</div>

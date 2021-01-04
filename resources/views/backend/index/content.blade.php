@auth()
    @include('auth.logout')
    @include('templates.auth')
    @include('plugin.sidebar')
@endauth
@guest()
    @include('templates.guest')
@endguest


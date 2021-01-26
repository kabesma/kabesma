@auth()
    @include('content.logout')
    @include('content.main')
    @include('content.sidebar')
@endauth
@guest()
    @include('content.guest')
@endguest


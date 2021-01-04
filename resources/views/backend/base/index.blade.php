<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
@include('backend.index.header')
<body class="{{ $class ?? ''  }}">
@include('backend.index.content')

@include('backend.index.footer')
</body>
</html>

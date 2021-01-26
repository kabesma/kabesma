<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
@include('index.header')
<body class="{{ $class ?? ''  }}">
@include('index.content')
@include('index.footer')
</body>
</html>

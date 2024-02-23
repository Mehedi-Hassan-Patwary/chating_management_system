<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layout.css')
</head>
<body>
    @include('frontend.layout.navbar')

    @yield('content')


    @include('frontend.layout.footer')
    @include('frontend.layout.js')
</body>
</html>
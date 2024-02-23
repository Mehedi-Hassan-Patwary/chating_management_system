<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layout.css')
    @include('backend.dashbord.css')
</head>
<body>
    @include('backend.dashbord.topbar')



    @include('backend.dashbord.sidebar')

             @yield('content')

    @include('frontend.layout.js')
</body>
</html>
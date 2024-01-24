<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="bg-hitam p-5 m-auto flex justify-between items-center font-poppins fixed w-full z-50">
        @include('includes.home.nav')
    </nav>

    <div class="">
        @yield('content')
    </div>
</body>
</html>

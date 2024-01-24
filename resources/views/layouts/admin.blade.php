<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body class="flex items-center justify-center font-poppins antialiased" style="background: #edf2f7;">
    <div id="view" class="h-full w-screen flex flex-row" x-data="{ sidenav: true }">
        @include('includes.dashboard.aside')

        @yield('content')
    </div>
</body>
</html>

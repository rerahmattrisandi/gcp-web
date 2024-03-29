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
    @if(session('success'))
    <div class="bg-slate-400 p-10 border-2 mb-10">
        {{ session('success') }}
    </div>
    @endif

    <div class="flex justify-center">
        @yield('content')
    </div>
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/original.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/original.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('components.Header')
        <div id="bottoms" class="md:container md:mx-auto flex md:flex-wrap justify-between">
            @include('bottom.bottom1')
            @include('bottom.bottom2')
            @include('bottom.bottom3')
            @include('bottom.bottom4')
        </div>
    </div>
</body>
</html>

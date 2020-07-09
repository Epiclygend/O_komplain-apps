<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        @include('layouts.nav')
        <main class="d-flex flex-column">
            @yield('page')
        </main>
        @include('layouts.flash')
    </body>
</html>

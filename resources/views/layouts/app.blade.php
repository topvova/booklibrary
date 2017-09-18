<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ elixir("css/style.css") }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        @include('partials.nav')

        @yield('content')

        @include('partials.prefooter')

        @include('partials.footer')

        <script src="{{ elixir("js/main.js") }}"></script>
    </body>
</html>
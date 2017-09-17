<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ elixir("css/style.css") }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        @include('partials.nav')

        @include('partials.precontent')

        @yield('content')

        @include('partials.prefooter')

        @include('partials.footer')

        <script src="{{ elixir("js/main.js") }}"></script>
    </body>
</html>
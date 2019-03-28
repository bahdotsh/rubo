<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Betterly') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        {{-- @include(Auth::check() ? 'inc.usernavbar' : 'inc.navbar') --}}

        @include(Auth::check() ? (Auth::user()->user_type == 1 ? 'inc.adminnavbar' : 'inc.usernavbar') : 'inc.navbar')
        @yield('content')
    </div>


</body>
</html>

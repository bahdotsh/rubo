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


        @if(Auth::check())

          @if(Auth::user()->user_type == 1)
            @include('inc.adminnavbar')

          @elseif (Auth::user()->user_type == 2)
            @include('inc.coachnavbar')

          @elseif (Auth::user()->user_type == 3)
            @include('inc.mastercoachnavbar')

        @elseif (Auth::user()->user_type == 4)
          @include('inc.coachnavbar')
        @endif
      @else
         @include('inc.navbar')
      @endif

      @yield('content')
    </div>


</body>
</html>

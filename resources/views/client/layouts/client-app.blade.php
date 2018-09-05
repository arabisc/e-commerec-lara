<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-COMMEREC - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lighter">
  <div id="app">
    <header class="header">
      @include('client._include.navs.client-topnav')
      @include('client._include.navs.client-titleBar')
      @include('client._include.navs.client-mainnav')
    </header>
    {{-- Header --}}

    <main class="container mx-auto flex flex-wrap my-6">
        @yield('content')
    </main>
  </div>
  @yield('scripts')
</body>
</html>

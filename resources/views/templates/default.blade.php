<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}">

    <title>Социальная сеть | {{ config('app.name') }}</title>
  </head>
  <body>
    @include('templates.partials.navigation')

    <div class="container content">
        @include('templates.partials.alerts')
        @yield('content')
    </div>

    <footer class="fixed-bottom bg-primary text-light mt-3">
      <!-- Copyright -->
      <div class="text-center py-3">© 2020 Copyright:
        <a href="{{ route('home') }}" class="text-light"> Social</a>
      </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script>
    $(function() {  
        $("body").niceScroll({
          cursorcolor: "#3086ce",
          cursorwidth: "10px",
          background: "rgba(20,20,20,0.3)",
          cursorborderradius: 10
        });
    });
    </script>
  </body>
</html>
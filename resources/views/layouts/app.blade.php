<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

   {{--  <script src="{{ asset('js/main.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



<!--  variables para poder usarlas en los js -->
<script defer>


  // colocarlo entre comillas simples, si no dice no definido
  const BASE_URL = '{{ url('/') }}';

   // var BASE_URL = 1;

</script>

 <script src="{{ asset('js/main.js') }}" defer></script>


</head>
<body>

    @include('inc.navbar')


    <div class="container">

        <div class="row">

            @yield('content')

        </div>

    </div>

    @include('inc.footer')

    
</body>
</html>

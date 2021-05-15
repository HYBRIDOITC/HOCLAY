<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ setting('site.title') }}</title>
    <link rel="stylesheet" href="assets/styles/style.css" />
    <link rel="stylesheet" href="assets/styles/scene.css" />
    <link rel="stylesheet" href="assets/styles/cursor.css" />
    <link rel="stylesheet" href="assets/styles/preloader.css" />
    <link rel="stylesheet" href="assets/styles/hexgrid.css" />
  </head>
  <body>
    
    @include('partials.cursor')
    @yield('content')
    <!-- partial@include('partials.preloader')
    <link rel="stylesheet" href="assets/styles/hexbuttons.css" /> -->
    <script src='assets/functions/jquery.min.js'></script>
    <script src='assets/functions/particles.min.js'></script>
    <script src='assets/functions/jquery.parallax.js'></script>
    
    <script src="assets/functions/gsap.min.js"></script>
    <script src="assets/functions/cursor.js"></script>
    <script src="assets/functions/script.js"></script>
  </body>

</html>

<!doctype html>
<!--
COPYRIGHT by hybridoitc/Misbah
Before using this theme, you should accept themeforest licenses terms.
http://themeforest.net/licenses
-->

<html class="no-js" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <!-- Page Title Here -->
        <title>{{ setting('site.title') }} | {{ setting('site.description') }}</title>
		
        <!-- Page Description Here -->
		<meta name="description" content="{{ setting('site.description') }}">

        <!-- Seo Keywords Here -->
		<meta name="keyword" content="{{ setting('site.description') }}">

        <!-- Disable screen scaling-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
        
        <!-- Initializer -->
        <link rel="stylesheet" href="assets/css/normalize.css">        
        
        <!-- Web fonts and Web Icons -->
        <link rel="stylesheet" href="assets/css/pageloader.css">
        <link rel="stylesheet" href="assets/fonts/opensans/stylesheet.css">
        <link rel="stylesheet" href="assets/fonts/asap/stylesheet.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        
        <!-- Vendor CSS style -->
        <link rel="stylesheet" href="assets/css/foundation.min.css">
        <link rel="stylesheet" href="assets/js/vendor/jquery.fullPage.css">
        <link rel="stylesheet" href="assets/js/vegas/vegas.min.css">
        
		    <!-- Main CSS files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/main_responsive.css">
        <link rel="stylesheet" href="./assets/css/style-font1.css">
        <link rel="stylesheet" href="assets/styles/scene.css" />
        <link rel="stylesheet" href="assets/styles/cursor.css" />
        <link rel="stylesheet" href="assets/styles/hexgrid.css" />
    
        
        <script src="assets/js/vendor/modernizr-2.7.1.min.js"></script>
    </head>

    <body id="menu" class="alt-bg"> 

        @include('partials.preloader')

        @include('partials.cursor')
        
        @include('partials.header')
        
        @yield('content')


        @include('partials.footer')
        <!-- All Javascript plugins goes here -->
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
		<!-- All vendor scripts -->
        <script src="assets/js/vendor/all.js"></script>
        
        <script src='assets/functions/particles.min.js'></script>
        <script src='assets/functions/jquery.parallax.js'></script>
        
        <script src="assets/functions/gsap.min.js"></script>
        <script src="assets/functions/cursor.js"></script>
        <script src="assets/functions/script.js"></script>
		<!-- Downcount JS -->
        <script src="assets/js/jquery.downCount.js"></script>
		
		<!-- Form script -->
        <script src="assets/js/form_script.js"></script>
        
		<!-- Javascript main files -->
        <script src="assets/js/main.js"></script>
         

        <!-- Google Analytics: Uncomment and change UA-XXXXX-X to be your site"s ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src="//www.google-analytics.com/analytics.js";
            r.parentNode.insertBefore(e,r)}(window,document,"script","ga"));
            ga("create","UA-XXXXX-X");ga("send","pageview");
        </script>-->
    </body>
</html>

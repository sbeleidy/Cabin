<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Learn web design and development in one place. One price.</title>
        <meta name="description" content="Build web apps and learn all the technologies that make them work together.">
        <link href="/assets/img/favicon.png" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Typekit  -->
        <script src="//use.typekit.net/asp8mra.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        @yield('styles')
        @yield('headScripts')
    </head>
    <body class="ming">
    	@include('partials.navbar')
    	@yield('content')
        @include('partials.footer')
        <script src="/assets/js/vendor/modernizr.js"></script>
    	<script src="/assets/js/vendor/jquery.min.js"></script>
    	<script src="/assets/js/vendor/foundation.min.js"></script>
    	<script src="/assets/js/vendor/foundation.equalizer.js"></script>
        <script src="/assets/js/vendor/foundation.alert.js"></script>
    	@yield('footScripts')
    	<script>
    	    $(document).foundation();
    	</script>
    </body>
</html>
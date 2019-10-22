<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="John Doe">
        <meta name="description" content="">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>


        <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
        <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}" />
        <!-- Plugin-CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- Main-Stylesheets -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        @yield('styles')
    </head>
    <body data-spy="scroll" data-target="#primary-menu">
        <div>
            @yield('content')
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
        <!--Plugin-JS-->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/contact-form.js')}}"></script>
        <script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
        <script src="{{asset('js/scrollUp.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <!--Main-active-JS-->
        <script src="{{asset('js/main.js')}}"></script>
        @stack('scripts')

    </body>
    <footer>
        @yield('footer')
    </footer>
</html>
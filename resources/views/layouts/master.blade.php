<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ZK Dunajplavba</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <!--[if lt IE 9]>
        <script src="{{ asset('js/vendor/respond.min.js') }}"></script>
        <![endif]-->

        @yield('css')
    </head>
    <body @if(Route::getCurrentRoute()->getPath() == '/') class="frontpage" @endif>
        @include('sections.old_browser')
        @include('sections.header')

        @yield('content')

        @include('sections.footer')
        @include('sections.copyright')
        @include('sections.preloader')

        <script src="{{ asset('js/vendor/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/vendor/placeholdem.min.js') }}"></script>
        <script src="{{ asset('js/vendor/hoverIntent.js') }}"></script>
        <script src="{{ asset('js/vendor/superfish.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.actual.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquerypp.custom.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.elastislide.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.flexslider-min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.ui.totop.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.easypiechart.min.js') }}"></script>
        <script src='{{ asset('js/vendor/jflickrfeed.min.js') }}'></script>
        <script src="{{ asset('js/vendor/jquery.sticky.js') }}"></script>
        <script src='{{ asset('js/vendor/owl.carousel.min.js') }}'></script>
        <script src='{{ asset('js/vendor/jquery.nicescroll.min.js') }}'></script>
        <script src='{{ asset('js/vendor/jquery.fractionslider.min.js') }}'></script>
        <script src='{{ asset('js/vendor/jquery.scrollTo-min.js') }}'></script>
        <script src='{{ asset('js/vendor/jquery.localscroll-min.js') }}'></script>
        <script src='{{ asset('js/vendor/jquery.parallax-1.1.3.js') }}'></script>
        <script src='{{ asset('js/vendor/jquery.bxslider.min.js') }}'></script>
        <script src='{{ asset('js/vendor/jquery.funnyText.min.js') }}'></script>
        {{--<script src='{{ asset('twitter/jquery.tweet.min.js') }}'></script>--}}

        @yield('js')

        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>

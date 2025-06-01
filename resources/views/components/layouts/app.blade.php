<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="author" content="Gis Soft Technology">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Gis Soft Technology</title>
    <link href="{{ asset('front/agency/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('front/vendor/css/bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/revolution-settings.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/cubeportfolio.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/agency/css/style.css') }}" rel="stylesheet">
    @stack('styles')
    @livewireStyles
</head>
<body data-offset="90" data-spy="scroll" data-target=".navbar">
<div class="preloader">
    <div class="box"></div>
</div>
<div class="cd-transition-layer visible opening">
    <div class="bg-layer"></div>
</div>
@livewire('partials.header')
{{ $slot }}
<div id="aimated-cursor">
    <div id="cursor">
        <div id="cursor-loader"></div>
    </div>
</div>
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<script src="{{ asset('front/vendor/js/bundle.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.appear.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/swiper.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/morphext.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/wow.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
<script src="{{ asset('front/agency/js/map.js') }}"></script>
<script src="{{ asset('front/vendor/js/contact_us.js') }}"></script>
<script src="{{ asset('front/agency/js/script.js') }}"></script>
@stack('scripts')
@livewireScripts
</body>
</html>

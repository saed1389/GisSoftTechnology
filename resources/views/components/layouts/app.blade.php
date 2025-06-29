<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Gis Soft Technology">
    <meta name="description" content="{{ 'Gis Soft Technology delivers custom web design, Laravel development, and eCommerce solutions to boost your business.' }}">
    <meta name="keywords" content="web design, web development, responsive websites, ecommerce development, Laravel development">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="{{  'Gis Soft Technology - Web Design & Development' }}">
    <meta property="og:description" content="{{  'Professional web design and development services by Gis Soft Technology.' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ asset('front/agency/img/og-image.jpg') }}">
    <meta property="og:site_name" content="Gis Soft Technology">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@GisSoftTech">
    <meta name="twitter:title" content="{{  'Gis Soft Technology - Web Design & Development' }}">
    <meta name="twitter:description" content="{{ 'Professional web design and development services by Gis Soft Technology.' }}">
    <meta name="twitter:image" content="{{ asset('front/agency/img/og-image.jpg') }}">
    <title>{{ 'Gis Soft Technology | Professional Web Design & Development Services' }}</title>
    <link rel="canonical" href="{{ request()->url() }}">
    <link href="{{ asset('front/agency/img/icons/favicon.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('front/agency/img/icons/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link rel="manifest" href="{{ asset('front/agency/img/icons/site.webmanifest') }}">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Gis Soft Technology",
            "description": "Professional web design and development services",
            "url": "{{ request()->root() }}",
        "logo": "{{ asset('front/agency/img/logo.png') }}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Your Street",
            "addressLocality": "Your City",
            "addressRegion": "Your State",
            "postalCode": "12345",
            "addressCountry": "Your Country"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-123-456-7890",
            "contactType": "Customer Service",
            "email": "info@gissofttech.com"
        },
        "sameAs": [
            "https://facebook.com/gissofttech",
            "https://twitter.com/gissofttech",
            "https://linkedin.com/company/gissofttech"
        ],
        "service": [
            {
                "@type": "Service",
                "serviceType": "Web Design",
                "description": "Custom web design for responsive and modern websites."
            },
            {
                "@type": "Service",
                "serviceType": "Web Development",
                "description": "Laravel and eCommerce development for scalable solutions."
            }
        ]
    }
    </script>
    <link href="{{ asset('front/vendor/css/bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/revolution-settings.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/vendor/css/cubeportfolio.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/agency/css/style.css') }}" rel="stylesheet">
    <style>
        @media (max-width: 768px) {
            .wow {
                animation: none !important;
                visibility: visible !important;
            }
        }
    </style>
    @stack('styles')
    @livewireStyles
</head>
<body data-offset="90" data-spy="scroll" data-target=".navbar" role="document">
<div class="preloader" aria-hidden="true">
    <div class="box"></div>
</div>
<div class="cd-transition-layer visible opening" aria-hidden="true">
    <div class="bg-layer"></div>
</div>
@livewire('partials.header')
<main role="main">
    {{ $slot }}
</main>
<div id="aimated-cursor" aria-hidden="true">
    <div id="cursor">
        <div id="cursor-loader"></div>
    </div>
</div>
<button class="scroll-top-arrow" aria-label="Scroll to top">
    <i class="fas fa-angle-up"></i>
</button>
<script defer src="{{ asset('front/vendor/js/bundle.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/jquery.appear.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/jquery.fancybox.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/owl.carousel.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/swiper.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/morphext.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/TweenMax.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/wow.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>
<script defer src="{{ asset('front/vendor/js/contact_us.js') }}"></script>
<script defer src="{{ asset('front/agency/js/script.js') }}"></script>

@stack('scripts')
@livewireScripts
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3SLFY3GMSC"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-3SLFY3GMSC');
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function () {
                gtag('event', 'form_submission', {
                    'event_category': 'Contact',
                    'event_label': 'Contact Form'
                });
            });
        }
    });
</script>
</body>
</html>

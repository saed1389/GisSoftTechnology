<div>
    <header class="cursor-light">
        <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon alt-font">
            <div class="container">
                <a class="logo link scroll" href="javascript:void(0)" title="Logo">
                    <img alt="logo" class="logo-dark default" src="{{ asset('front/agency/img/logo.png') }}" loading="lazy">
                </a>
                <div class="collapse navbar-collapse" id="agency">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link link scroll active" href="#home">{{ __('home.Home') }}</a>
                        <a class="nav-link link scroll" href="#services">{{ __('home.About Us') }}</a>
                        <a class="nav-link link scroll" href="#portfolio">{{ __('home.Our Work') }}</a>
                        <a class="nav-link link scroll" href="#blog">{{ __('home.Our Blog') }}</a>
                        <a class="nav-link link scroll" href="#contact">{{ __('home.Contact Us') }}</a>
                        <span class="menu-line"><i aria-hidden="true" class="fa fa-angle-down"></i></span>
                    </div>
                    <a class="btn btn-medium btn-rounded btn-transparent-white btn-hvr-white ml-3" style="display: {{ app()->getLocale() == 'tr' ? 'none' : 'block' }}" href="{{ url('/change-locale/tr') }}"><img style="width: 32px;" src="{{ asset('front/agency/img/tr-flag.png') }}" alt="" loading="lazy">
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </a>
                    <a class="btn btn-medium btn-rounded btn-transparent-white btn-hvr-white ml-3" style="display: {{ app()->getLocale() == 'en' ? 'none' : 'block' }}" href="{{ url('/change-locale/en') }}"><img style="width: 32px;" src="{{ asset('front/agency/img/uk-flag.png') }}" alt="" loading="lazy">
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </a>
                </div>
                <button class="fullnav-toggler link" id="full-menu-1" type="button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>

                <div class="slider-social">
                    <ul class="list-unstyled">
                        <li class="animated-wrap">
                            <a class="animated-element" href="javascript:void(0);">
                                <i aria-hidden="true" class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="animated-wrap">
                            <a class="animated-element" href="javascript:void(0);">
                                <i aria-hidden="true" class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="animated-wrap">
                            <a class="animated-element" href="javascript:void(0);">
                                <i aria-hidden="true" class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="nav-holder main style-2 alt-font">
            <button class="fullnav-close link" type="button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div class="container">
                <div class="shape-left">
                    <nav class="navbar full-menu-navigation left">
                        <ul class="list-unstyled">
                            <li>
                                <a class="link scroll" href="#home">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">{{ __('home.Home') }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="link scroll" href="#services">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">{{ __('home.About Us') }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="link scroll" href="#portfolio">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">{{ __('home.Our Work') }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="link scroll" href="#blog">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">{{ __('home.Our Blog') }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="link scroll" href="#contact">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">{{ __('home.Contact Us') }}</span>
                                </a>
                            </li>
                        </ul>
                        <span class="full-menu-dot" style="transform: scale(0);"></span>
                    </nav>
                    <img alt="shape" src="{{ asset('front/agency/img/shape-8.png') }}" loading="lazy">
                </div>
                <div class="shape-right">
                    <div class="full-menu-detail hide-cursor">
                        <h6 class="title">{{ __('home.Press Contact') }}</h6>
                        <p><i class="fas fa-user-alt"></i>Gis Soft Technology</p>
                        <p><i class="fas fa-mobile-alt"></i><a href="tel:+905355186985">+90 535 518 6985</a></p>
                        <p><i class="fas fa-envelope"></i><a href="mailto:contact@gissofttechnology.com">contact@gissofttechnology.com</a></p>
                    </div>
                    <img alt="shape" src="{{ asset('front/agency/img/shape-7.png') }}" loading="lazy">
                </div>
            </div>
        </div>
    </header>
</div>

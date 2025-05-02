<div>

    @livewire('partials.header')
    @livewire('partials.home')
    @livewire('partials.services')
    <section class="gradient-bg2" id="counters">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pl-lg-4 order-lg-2 wow fadeInRight">
                    <div class="heading-area">
                        <span class="sub-title text-white">Gis Soft Technology</span>
                        {!! __('home.about title1') !!}
                        <p class="para text-white">{{ __('home.about description1') }}</p>
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                        <img alt="vector" src="{{ asset('front/agency/img/vector-art-3.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="heading-area">
                        <span class="sub-title">Gis Soft Technology</span>
                        {!! __('home.about title2') !!}
                        <p class="para">{{ __('home.about description2') }}</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                        <img alt="image" src="{{ asset('front/agency/img/vector-art-4.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('partials.projects')
    @livewire('partials.blogs')
    <section class="gradient-bg2" id="client">
        <h2 class="d-none">hidden</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel partners-slider">
                        <div class="logo-item"><img alt="client-logo" src="{{ asset('front/agency/img/client-1.png') }}"></div>
                        <div class="logo-item"><img alt="client-logo" src="{{ asset('front/agency/img/client-2.png') }}"></div>
                        <div class="logo-item"><img alt="client-logo" src="{{ asset('front/agency/img/client-3.png') }}"></div>
                        <div class="logo-item"><img alt="client-logo" src="{{ asset('front/agency/img/client-4.png') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row align-items-top">
                <div class="col-lg-5 order-lg-2 wow fadeInRight">
                    <div class="contact-detail">
                        <div class="contact-dots" data-dots=""></div>
                        <div class="heading-area pb-5">
                            <h2 class="title mt-0 pb-1">{{ __('home.contact title') }}</h2>
                            <p class="para">{{ __('home.contact description') }}</p>
                        </div>
                        <ul class="address list-unstyled">
                            <li>
                            <span class="address-icon gradient-text2">
                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                            </span>
                                <span class="address-text">HACIHALİL MAH. 1219. SK. NALBUR İŞ HANI NO: 8 İÇ KAPI NO: 305 <br>GEBZE/ KOCAELİ Türkiye</span>
                            </li>
                            <li>
                            <span class="address-icon gradient-text2">
                                <i aria-hidden="true" class="fas fa-phone-volume"></i>
                            </span>
                                <span class="address-text">
                                <a class="mr-3" href="tel:+905355186985">+90 535 518 6985</a>
                            </span>
                            </li>
                            <li>
                            <span class="address-icon gradient-text2">
                                <i aria-hidden="true" class="fas fa-paper-plane"></i>
                            </span>
                                <span class="address-text">
                                <a class="mr-3 alt-color" href="mailto:contact@gissofttechnology.com">contact@gissofttechnology.com</a>
                            </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 mt-4 pt-3 mt-lg-0 pt-lg-0 wow fadeInLeft">
                    <div class="heading-area pb-2">
                        <h2 class="title mt-0">{{ __('home.Get In Touch') }}</h2>
                    </div>
                    <form class="contact-form" id="contact-form-data">
                        <div class="row">
                            <div class="col-12" id="result"></div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input class="form-control" id="your_name" name="userName" placeholder="{{ __('home.name') }}" required="" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="your_email" name="userEmail" placeholder="{{ __('home.email') }}" required="" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="subject" name="userSubject" placeholder="{{ __('home.subject') }}" required="" type="text">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="userMessage" placeholder="{{ __('home.message') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block mt-4 contact_btn" href="javascript:void(0);"
                                   id="submit_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i><b>{{ __('home.send message') }}</b>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @livewire('partials.footer')
</div>

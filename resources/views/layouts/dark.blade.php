<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- site favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" sizes="16x16">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <!-- custom select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/nice-select.css') }}">
    <!-- animate css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <!-- lightcase css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/lightcase.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery-ui.min.css') }}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/datepicker.min.css') }}">
    <!-- style main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    <div class="preloader">
        <svg class="mainSVG" viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <path id="puff"
                    d="M4.5,8.3C6,8.4,6.5,7,6.5,7s2,0.7,2.9-0.1C10,6.4,10.3,4.1,9.1,4c2-0.5,1.5-2.4-0.1-2.9c-1.1-0.3-1.8,0-1.8,0
            s-1.5-1.6-3.4-1C2.5,0.5,2.1,2.3,2.1,2.3S0,2.3,0,4.4c0,1.1,1,2.1,2.2,2.1C2.2,7.9,3.5,8.2,4.5,8.3z"
                    fill="#fff" />
                <circle id="dot" cx="0" cy="0" r="5" fill="#fff" />
            </defs>

            <circle id="mainCircle" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400"
                cy="300" r="130" />
            <circle id="circlePath" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400"
                cy="300" r="80" />

            <g id="mainContainer">
                <g id="car">
                    <path id="star" fill="#FFF"
                        d="M17.5 0l5.3 10.3h11.4l-8.2 7.5 2.9 11.4L17.5 25l-7.9 6.6 2.9-11.4-8.2-7.5h11.4z" />
                </g>
            </g>
        </svg>
    </div>

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="las la-arrow-up"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->


    <!-- theme-switcher start -->
    {{-- <div class="theme-switcher">
        <div class="theme-switcher__icon">
            <i class="las la-cog"></i>
        </div>
        <div class="theme-switcher__body">
            <div class="single dark active">
                <a href="{{ url('/') }}">Dark Version</a>
    </div>
    <div class="single light mt-4">
        <a href="light-{{ url('/') }}">Light Version</a>
    </div>
    </div>
    </div> --}}
    <!-- theme-switcher end -->

    <!-- page-wrapper start -->
    <div class="page-wrapper">

        <x-login-modal />

        <x-sign-up-modal />

        <!-- header-section start  -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="left d-flex align-items-center">
                                <a href="tel:0478799463"><i class="las la-phone-volume"></i> Customer Support</a>
                                <div class="language">
                                    <i class="las la-globe-europe"></i>
                                    <select>
                                        <option>En</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="right">
                                <div class="product__cart">

                                    {{-- <a href="cart.html" class="amount__btn">
                                        <i class="las la-ticket-alt"></i>
                                        <span class="cart__num p-1">{{Auth::user()->number_of_tickets}}</span>
                                    </a> --}}

                                    {{-- user name --}}
                                    @if (Auth::check())
                                        <x-nav-link :href="route('profile.show')">
                                            <h5 class="mx-3">{{ Auth::user()->name }}</h5>
                                        </x-nav-link>
                                    @endif
                                </div>
                                @auth
                                    <a href="{{ route('profile.show') }}" class="user__btn ml-1"><i
                                            class="las la-user"></i></a>
                                @else
                                    <a class="mr-5" href="#0" data-toggle="modal" data-target="#signupModal">Sign
                                        Up</a>
                                    <a href="#0" data-toggle="modal" data-target="#loginModal">Login</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- header__top end -->
            <div class="header__bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-xl p-0 align-items-center">
                        <a class="site-logo site-title" href="{{ url('/') }}"><img
                                src="{{ asset('assets/images/logo.png') }}" alt="site-logo"><span class="logo-icon"><i
                                    class="flaticon-fire"></i></span></a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu-toggle"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="menu_has_children">
                                    <a href="{{ route('raffles.index') }}"
                                        :active="request()->routeIs('raffles.index')">raffles</a>
                                </li>
                                <li class="menu_has_children">
                                    <a href="{{ route('profile.show') }}"
                                        :active="request()->routeIs('profile.show')">My Tickets</a>
                                </li>
                                <li><a href="{{ route('winners.index') }}"
                                        :active="request()->routeIs('winners.index')">Winners</a></li>
                                <li><a href="{{ route('contact') }}"
                                        :active="request()->routeIs('contact')">Contact</a></li>
                            </ul>
                            @auth
                                @if (Auth::user()->number_of_tickets == 0)
                                    <div class="nav-right">
                                        <a href="{{ url('/buy-tickets') }}" class="cmn-btn style--three btn--sm">
                                            <img src="{{ asset('assets/images/icon/btn/tag.png') }}" alt="icon"
                                                class="mr-2">
                                            Buy Tickets
                                        </a>
                                    </div>
                                @else
                                    <a href="{{route('profile.show')}}">
                                        <div class="product__cart ml-4">
                                            <span clas1s="total__amount">
                                                <p class="cmn-btn style--two">Tickets:
                                                    {{ Auth::user()->number_of_tickets ?? 0 }}
                                                </p>
                                            </span>
                                        </div>
                                    </a>
                                @endif
                            @else
                                <div class="nav-right">
                                    <a href="{{ url('/buy-tickets') }}" class="cmn-btn style--three btn--sm"><img
                                            src="{{ asset('assets/images/icon/btn/tag.png') }}" alt="icon"
                                            class="mr-2"> Buy
                                        Tickets</a>
                                </div>
                            @endauth
                        </div>
                    </nav>
                </div>
            </div><!-- header__bottom end -->
        </header>
        <!-- header-section end  -->

        {{ $slot }}

        <!-- footer section start  -->
        <footer class="footer-section">
            <div class="bg-shape--top"><img src="{{ asset('assets/images/elements/round-shape-2.png') }}"
                    alt="image"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
                        <div class="subscribe-area">
                            <div class="left">
                                <span class="subtitle">Subscribe</span>
                                <h3 class="title">To Get Exclusive Benefits</h3>
                            </div>
                            <div class="right">
                                <form class="subscribe-form" action="{{ route('subscribe') }}" method="POST">
                                    @csrf
                                    <input type="email" name="email" id="subscribe_email"
                                        placeholder="Enter Your Email">
                                    <button type="submit">Subscribe</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-120">
                <div class="row pb-5 align-items-center">
                    <div class="col-lg-4">
                        <ul class="app-btn">
                            <li><a href="#0"><img src="{{ asset('assets/images/icon/store-btn/1.png') }}"
                                        alt="image"></a>
                            </li>
                            <li><a href="#0"><img src="{{ asset('assets/images/icon/store-btn/2.png') }}"
                                        alt="image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <ul class="short-links justify-content-lg-end justify-content-center">
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('terms') }}">Terms of Services</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row py-5 align-items-center">
                    <div class="col-lg-6">
                        <p class="copy-right-text text-lg-left text-center mb-lg-0 mb-3">Copyright ©
                            {{ date('Y') }}. All Rights
                            Reserved By <a href="{{ url('https://webscape.net.au') }}">Webscape Designs</a></p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-links justify-content-lg-end justify-content-center">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer section end -->

    </div>
    <!-- page-wrapper end -->
    <!-- jQuery library -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <!-- custom select js -->
    <script src="{{ asset('assets/js/vendor/jquery.nice-select.min.js') }}"></script>
    <!-- lightcase js -->
    <script src="{{ asset('assets/js/vendor/lightcase.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <!-- slick slider js -->
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <!-- countdown js -->
    <script src="{{ asset('assets/js/vendor/jquery.countdown.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
    <!-- datepicker js -->
    <script src="{{ asset('assets/js/vendor/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/datepicker.en.js') }}"></script>
    <!-- preloader -->
    <script src="{{ asset('assets/js/vendor/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/MorphSVGPlugin.min.js') }}"></script>
    <!-- preloader -->
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>


    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
    </script>


</body>

</html>

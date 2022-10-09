<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'AZ-Afghanistan')</title>
    <meta content="@yield('description', '')" name="description">
    <meta content="@yield('keywords', '')" name="keywords">

    <!-- Fav icons -->
    <link href="{{ secure_asset('img/logo.png') }}" rel="icon">
    <link href="{{ secure_asset('img/logo.png') }} " rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ secure_asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('vendor/swiper/swiper-bundle.min.css') }}'" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">

    @if(\App\Helpers\Tools::instance()->getLanguage() != "en")
        <link href="{{ secure_asset('css/style-rtl.css') }}" rel="stylesheet">
    @endif

    @livewireStyles

    @stack('styles')
</head>
<body dir="{{ \App\Helpers\Tools::instance()->getLanguage() != "en" ? "rtl" : "ltr" }}">
    <div class="languages">
        <a href="setLanguage/en" class="lang-flag {{ \App\Helpers\Tools::instance()->getLanguage() == "en" ? 'selected' : '' }}">
            <img src="{{ asset('img/english-flag.png') }}" alt="en">
            {{ __('English') }}
        </a>

        <a href="setLanguage/ps" class="lang-flag {{ \App\Helpers\Tools::instance()->getLanguage() == "ps" ? 'selected' : '' }}">
            <img src="{{ asset('img/afghanistan-flag.jpg') }}" alt="ps">
            {{ __('Pashto') }}
        </a>

        <a href="setLanguage/dr" class="lang-flag {{ \App\Helpers\Tools::instance()->getLanguage() == "dr" ? 'selected' : '' }}">
            <img src="{{ asset('img/afghanistan-flag.jpg') }}" alt="dr">
            {{ __('Dari') }}
        </a>
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="px-0 container d-flex align-items-center border-bottom pb-3 mb-2">
            <h1 class="logo {{ \App\Helpers\Tools::instance()->getLanguage() == "en" ? 'me-auto' : 'ms-auto' }}">
                <a href="/">
                    {{ __('AZ') }}
                    <img src="{{ asset('img/logo.png') }}" alt="" >
                    {{ __('Afghanistan') }}
                    <span class="small" style="font-size: small">
                        {{ __('Service for the Asian - American Community') }}
                    </span>
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            @if(!request()->is('login'))
            <a href="/login" class="btn btn-success">
                {{ __('Login') }} / {{ __('Sign Up') }}
            </a>
            @endif
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0 container px-0">
            <ul>
                <li><a class="active" href="/">
                        <i class="bi bi-house"></i>&nbsp
                        {{ __('Home') }}
                    </a></li>
                <li>
                    <a href="">
                        <i class="bi bi-calendar-event"></i>&nbsp
                        {{ __('Events') }}
                    </a>
                </li>
                <li>
                    <a href="trainers.html">
                        <i class="bi bi-layers"></i>&nbsp
                        {{ __('Classified') }}
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#">
                        <i class="bi bi-tags"></i>&nbsp
                        <span>{{ __('Categories') }}</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/">
                        <i class="bi bi-info-circle"></i>&nbsp
                        {{ __('About') }}
                    </a>
                </li>
                <li>
                    <a href="/">
                        <i class="bi bi-envelope-open"></i>&nbsp
                        {{ __('Contact') }}
                    </a>
                </li>

                <li class="dropdown"><a href="#">
                        <i class="bi bi-three-dots-vertical"></i>&nbsp
                        <span>{{ __('More...') }}</span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </header>
    <!-- End Header -->

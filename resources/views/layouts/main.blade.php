<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="{{asset('../images/favicon.png')}}">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('../css/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('../css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{asset('../css/all.min.css')}}">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="{{asset('../fonts/stroyka.css')}}">
</head>

<body>
<!-- site -->
<div class="site">
    <header class="site__header d-lg-none">
        <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
        <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
            <div class="mobile-header__panel">
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button">
                            <svg width="18px" height="14px">
                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                            </svg>
                        </button>
                        <a class="mobile-header__logo" href="{{route('index')}}">
                            <!-- mobile-logo -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="120px" height="20px">
                                <path d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z"></path>
                            </svg>
                            <!-- mobile-logo / end -->
                        </a>
                        <div class="search search--location--mobile-header mobile-header__search">
                            <div class="search__body">
                                <form class="search__form" action="{{route('search')}}" method="GET">
                                    <input class="search__input" name="search" placeholder="Search over 10,000 products"
                                         required  aria-label="Site search" type="text" autocomplete="off">
                                    <button class="search__button search__button--type--submit" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                        </svg>
                                    </button>
                                    <button class="search__button search__button--type--close" type="button">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#cross-20"></use>
                                        </svg>
                                    </button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                            </div>
                        </div>
                        <div class="mobile-header__indicators">
                            <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg>
                                        </span>
                                </button>
                            </div>
                            <div class="indicator indicator--mobile d-sm-flex d-none">
                                <a href="wishlist.html" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#heart-20"></use>
                                            </svg>
                                            <span class="indicator__value">2</span>
                                        </span>
                                </a>
                            </div>
                            <div class="indicator indicator--mobile">
                                <a href="cart.html" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cart-20"></use>
                                            </svg>
                                            <span class="indicator__value">3</span>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile site__header / end -->
    <!-- desktop site__header -->
    <header class="site__header d-lg-block d-none">
        <div class="site-header">
            <!-- .topbar -->
            <div class="site-header__topbar topbar">
                <div class="topbar__container container">
                    <div class="topbar__row">
                        <div class="topbar__item topbar__item--link">
                            <a class="topbar-link" href="{{route('aboutUs')}}">About Us</a>
                        </div>
                        <div class="topbar__item topbar__item--link">
                            <a class="topbar-link" href="{{route('contactUs')}}">Contacts</a>
                        </div>
{{--                        <div class="topbar__item topbar__item--link">--}}
{{--                            <a class="topbar-link" href="">Store Location</a>--}}
{{--                        </div>--}}
{{--                        <div class="topbar__item topbar__item--link">--}}
{{--                            <a class="topbar-link" href="track-order.html">Track Order</a>--}}
{{--                        </div>--}}
{{--                        <div class="topbar__item topbar__item--link">--}}
{{--                            <a class="topbar-link" href="blog-classic.html">Blog</a>--}}
{{--                        </div>--}}
                        <div class="topbar__spring"></div>
                        <div class="topbar__item">
                            <div class="topbar-dropdown">
                                <button class="topbar-dropdown__btn" type="button">
                                    My Account
                                    <svg width="7px" height="5px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                    </svg>
                                </button>
                                <div class="topbar-dropdown__body">
                                    <!-- .menu -->
                                    <div class="menu menu--layout--topbar ">
                                        <div class="menu__submenus-container"></div>
                                        <ul class="menu__list">
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="{{route('account.dashboard')}}">
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="{{route('account.profile')}}">
                                                    Edit Profile
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="{{route('account.order.history')}}">
                                                    Order History
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="{{route('account.edit.address')}}">
                                                    Addresses
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="{{route('account.password')}}">
                                                    Password
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="{{route('account.logout')}}">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu / end -->
                                </div>
                            </div>
                        </div>
                        <div class="topbar__item">
                            <div class="topbar-dropdown">
{{--                                <button class="topbar-dropdown__btn" type="button">--}}
{{--                                    Currency: <span class="topbar__item-value">{{Session::get('currency')}}</span>--}}
{{--                                    <svg width="7px" height="5px">--}}
{{--                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>--}}
{{--                                    </svg>--}}
{{--                                </button>--}}
                                <div class="topbar-dropdown__body">
                                    <!-- .menu -->
                                    <div class="menu menu--layout--topbar ">
                                        <div class="menu__submenus-container"></div>
                                        <ul class="menu__list">
{{--                                            <li class="menu__item">--}}
{{--                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                <div class="menu__item-submenu-offset"></div>--}}
{{--                                                <a class="menu__item-link" href="{{route('currency.edit', 'EURO')}}">--}}
{{--                                                    € Euro--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="{{route('currency.edit', 'UAH')}}">
                                                    ₴ Ukraine UAH
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="{{route('currency.edit', 'RUB')}}">
                                                    ₽ Russian Ruble
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu / end -->
                                </div>
                            </div>
                        </div>
                        <div class="topbar__item">
                            <div class="topbar-dropdown">
                                <button class="topbar-dropdown__btn" type="button">
                                    Language: <span
                                        class="topbar__item-value">{{ \Str::upper(\App::getLocale()) }}</span>
                                    <svg width="7px" height="5px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                    </svg>
                                </button>
                                <div class="topbar-dropdown__body">
                                    <!-- .menu -->
                                    <div class="menu menu--layout--topbar  menu--with-icons ">
                                        <div class="menu__submenus-container"></div>
                                        <ul class="menu__list">
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="{{ LaravelLocalization::getLocalizedURL('ua') }}">
                                                    <div class="menu__item-icon"><img
                                                            src="{{asset('../images/lang/icons8-ukraine-48.png')}}"
                                                            width="20"/></div>
                                                   @lang('Ukrainian')
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>


                                                <a class="menu__item-link" href="{{ LaravelLocalization::getLocalizedURL('ru') }}">
                                                    <div class="menu__item-icon"><img
                                                            src="{{asset('../images/lang/icons8-russia-48.png')}}"
                                                            width="20"/></div>
                                                    @lang('Russian')
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu / end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .topbar / end -->
            <div class="site-header__middle container">
                <div class="site-header__logo">
                    <a href="{{route('index')}}">
                        <!-- logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="196px" height="26px">
                            <path
                                d="M194.797,18 L184,18 C184,18.552 183.552,19 183,19 L182,19 C181.448,19 181,18.552 181,18 L181,16 L178.377,16 C177.708,16 177.119,15.556 176.935,14.912 L173.246,2 L168,2 L168,4 L168.500,4 C169.328,4 170,4.672 170,5.500 L170,24.500 C170,25.328 169.328,26 168.500,26 L165.500,26 C164.672,26 164,25.328 164,24.500 L164,5.500 C164,4.672 164.672,4 165.500,4 L166,4 L166,1.500 C166,0.672 166.672,0 167.500,0 L173.622,0 C174.292,0 174.881,0.444 175.065,1.088 L178.754,14 L181,14 L181,13 C181,12.448 181.448,12 182,12 L183,12 C183.552,12 184,12.448 184,13 L194.797,13 C195.461,13 196,13.539 196,14.203 L196,16.797 C196,17.461 195.461,18 194.797,18 ZM156.783,26 L154.483,26 C153.767,26 153.129,25.552 152.884,24.878 L150.437,18.135 C150.407,18.054 150.331,18 150.245,18 L142.768,18 C142.682,18 142.606,18.054 142.576,18.135 L140.129,24.878 C139.884,25.552 139.245,26 138.530,26 L136.230,26 C135.395,26 134.815,25.169 135.100,24.383 L143.445,1.122 C143.690,0.448 144.328,0 145.044,0 L147.969,0 C148.685,0 149.323,0.448 149.568,1.122 L157.913,24.383 C158.198,25.169 157.618,26 156.783,26 ZM148.472,12.725 L146.698,7.848 C146.633,7.668 146.380,7.668 146.315,7.848 L144.541,12.725 C144.492,12.859 144.591,13 144.733,13 L148.280,13 C148.422,13 148.521,12.859 148.472,12.725 ZM130.493,26 L128.090,26 C127.555,26 127.060,25.714 126.792,25.250 L122.610,18 L120.003,22.520 L120.003,24.500 C120.003,25.328 119.333,26 118.505,26 L116.507,26 C115.680,26 115.009,25.328 115.009,24.500 L115.009,1.500 C115.009,0.672 115.680,0 116.507,0 L118.505,0 C119.333,0 120.003,0.672 120.003,1.500 L120.003,12.520 L126.792,0.750 C127.060,0.286 127.555,0 128.090,0 L130.493,0 C131.646,0 132.367,1.250 131.791,2.250 L125.487,13 L131.791,23.750 C132.367,24.750 131.646,26 130.493,26 ZM103.987,15.775 L103.987,24.500 C103.987,25.328 103.315,26 102.486,26 L100.485,26 C99.656,26 98.984,25.328 98.984,24.500 L98.984,15.775 L98.594,15.100 L91.180,2.250 C90.610,1.250 91.330,0 92.481,0 L94.792,0 C95.322,0 95.823,0.290 96.093,0.750 L101.486,10.090 L106.879,0.750 C107.149,0.290 107.649,0 108.179,0 L110.491,0 C111.641,0 112.362,1.250 111.791,2.250 L103.987,15.775 ZM79,26 C71.821,26 66,20.179 66,13 C66,5.820 71.821,-0.001 79,-0.001 C86.180,-0.001 92.001,5.820 92.001,13 C92.001,20.179 86.180,26 79,26 ZM79,5 C74.582,5 71,8.582 71,13 C71,17.418 74.582,21 79,21 C83.418,21 87,17.418 87,13 C87,8.582 83.418,5 79,5 ZM62.793,23.750 C63.362,24.750 62.643,26 61.494,26 L59.186,26 C58.656,26 58.157,25.710 57.887,25.250 L53.711,18 L49.005,18 L49.005,24.500 C49.005,25.330 48.335,26 47.506,26 L45.508,26 C44.679,26 44.009,25.330 44.009,24.500 L44.009,1.500 C44.009,0.670 44.679,0 45.508,0 L54,0 C58.966,0 62.992,4.030 62.992,9 C62.992,12.240 61.274,15.090 58.706,16.670 L62.793,23.750 ZM54,5 L50.004,5 C49.454,5 49.005,5.450 49.005,6 L49.005,12 C49.005,12.550 49.454,13 50.004,13 L54,13 C56.208,13 57.997,11.210 57.997,9 C57.997,6.790 56.208,5 54,5 ZM39.500,5 L33,5 L33,24.500 C33,25.328 32.328,26 31.500,26 L29.500,26 C28.672,26 28,25.328 28,24.500 L28,5 L21.500,5 C20.672,5 20,4.328 20,3.500 L20,1.500 C20,0.672 20.672,0 21.500,0 L39.500,0 C40.328,0 41,0.672 41,1.500 L41,3.500 C41,4.328 40.328,5 39.500,5 ZM16.487,8 L14.181,8 C13.565,8 13.040,7.611 12.790,7.048 C12.261,5.856 10.765,5 9,5 C6.793,5 5.005,6.340 5.005,8 C5.005,8.940 5.575,9.780 6.483,10.320 C6.706,10.455 6.948,10.574 7.206,10.673 C8.059,11 8.412,12.020 7.955,12.812 L6.948,14.558 C6.573,15.208 5.768,15.499 5.080,15.201 C3.872,14.679 2.815,13.924 1.989,13 C0.751,11.630 0.012,9.890 0.012,8 C0.012,3.580 4.037,0 9,0 C13.254,0 17.017,2.629 17.950,6.163 C18.196,7.095 17.450,8 16.487,8 ZM1.513,18 L3.820,18 C4.435,18 4.960,18.389 5.210,18.952 C5.739,20.144 7.236,21 9,21 C11.207,21 12.995,19.660 12.995,18 C12.995,17.060 12.426,16.220 11.517,15.680 C11.294,15.544 11.052,15.426 10.794,15.327 C9.941,14.999 9.588,13.980 10.045,13.188 L11.053,11.442 C11.427,10.792 12.233,10.501 12.920,10.799 C14.128,11.320 15.185,12.075 16.011,13 C17.249,14.370 17.988,16.110 17.988,18 C17.988,22.420 13.964,26 9,26 C4.747,26 0.983,23.371 0.050,19.837 C-0.196,18.905 0.550,18 1.513,18 Z"></path>
                        </svg>
                        <!-- logo / end -->
                    </a>
                </div>
                <div class="site-header__search">
                    <div class="search search--location--header ">
                        <div class="search__body">
                            <form class="search__form" action="{{route('search')}}" method="POST">
                                @csrf
                                <select name="category_id" class="search__categories" aria-label="Category">
                                    <option  value="all">All Categories</option>
                                    @foreach($categoriesFlatTree as $category)
                                        <option value="{{$category->id}}">{!! implode('', array_fill(0, 2 * $category->depth, '&nbsp;')) !!} {{$category->name}}</option>
                                    @endforeach
                                </select>
                                <input class="search__input" name="search" placeholder="Search over 10,000 products"
                                     required  aria-label="Site search" type="text" autocomplete="off">
                                <button class="search__button search__button--type--submit" type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg>
                                </button>
                                <div class="search__border"></div>
                            </form>
                            <div class="search__suggestions suggestions suggestions--location--header"></div>
                        </div>
                    </div>
                </div>
                <div class="site-header__phone">
                    <div class="site-header__phone-title">Customer Service</div>
                    <div class="site-header__phone-number">(800) 060-0730</div>
                </div>
            </div>

            <div class="site-header__nav-panel">
                <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                    <div class="nav-panel__container container">
                        <div class="nav-panel__row">
                            <div class="nav-panel__departments">
                                <!-- .departments -->
                                <div class="departments  departments--open departments--fixed "
                                     data-departments-fixed-by=".block-slideshow">
                                    <div class="departments__body"
                                         style="{{ url()->current() !== URL::to(route('index')) ?  'display:none' :  'display:block' }}">
                                        <div class="departments__links-wrapper">
                                            <div class="departments__submenus-container"></div>
                                            <ul class="departments__links">
                                                @foreach($categoriesTree as $categoryMenu)
                                                    <li class="departments__item">
                                                        <a class="departments__item-link" href="{{route('getShopList', $categoryMenu->id)}}">
                                                            {{$categoryMenu->name}}
                                                            <svg class="departments__item-arrow" width="6px"
                                                                 height="9px">
                                                                <use
                                                                    xlink:href="../images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div
                                                            class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--xl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu  megamenu--departments ">
                                                                <div class="megamenu__body"
                                                                     style="background-image: url('images/megamenu/megamenu-1.jpg');">
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                @foreach($categoryMenu->children as $subCategory)
                                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                            <a href="{{route('getShopList', $subCategory->id)}}">{{$subCategory->name}}</a>
                                                                                        </li>
                                                                                @endforeach

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{--                                                        <!-- .megamenu / end -->--}}
                                                        </div>
                                                    </li>
                                            @endforeach

                                        </div>
                                    </div>
                                    <button class="departments__button">
                                        <svg class="departments__button-icon" width="18px" height="14px">
                                            <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                        </svg>
                                        Shop By Category
                                        <svg class="departments__button-arrow" width="9px" height="6px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                        </svg>
                                    </button>
                                </div>
                                <!-- .departments / end -->
                            </div>
                            <!-- .nav-links -->
                            <div class="nav-panel__nav-links nav-links">
                                <ul class="nav-links__list">
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="{{route('index')}}">
                                            <div class="nav-links__item-body">
                                                Главная
                                                <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
{{--                                                <ul class="menu__list">--}}
{{--                                                    <li class="menu__item">--}}
{{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                        <div class="menu__item-submenu-offset"></div>--}}
{{--                                                        <a class="menu__item-link" href="{{route('getShopList')}}">--}}
{{--                                                            Продукты--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
                                                    {{--                                                    <li class="menu__item">--}}
                                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                                    {{--                                                        <a class="menu__item-link" href="index-4.html">--}}
                                                    {{--                                                            Home 2 Finder--}}
                                                    {{--                                                        </a>--}}
                                                    {{--                                                    </li>--}}
                                                    {{--                                                    <li class="menu__item">--}}
                                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                                    {{--                                                        <a class="menu__item-link" href="offcanvas-cart.html">--}}
                                                    {{--                                                            Offcanvas Cart--}}
                                                    {{--                                                        </a>--}}
                                                    {{--                                                    </li>--}}
{{--                                                </ul>--}}
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="">
                                            <div class="nav-links__item-body">
                                                Megamenu
                                                <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div
                                            class="nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--nl">
                                            <!-- .megamenu -->
                                            <div class="megamenu ">
                                                <div class="megamenu__body">
                                                    <div class="row">
                                                        @foreach($categoriesTree as $category)
                                                            <div class="col-6">
                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                        <a href="{{ route('getShopList', $category->id) }}">{{$category->name}}</a>

                                                                        @foreach($category->children as $subCategory)
                                                                            {{--                                                                        {{$subCategory->parent_id}}--}}
{{--                                                                            @if($category->id == $subCategory->parent_id)--}}
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="{{route('getShopList', $subCategory->id)}}">{{$subCategory->name}}</a>
                                                                                    </li>
                                                                                    {{--                                                                        <li class="megamenu__item"><a--}}
                                                                                    {{--                                                                                href="">Wrenches</a></li>--}}
                                                                                    {{--                                                                        <li class="megamenu__item"><a href="">Wall--}}
                                                                                    {{--                                                                                Chaser</a></li>--}}
                                                                                    {{--                                                                        <li class="megamenu__item"><a href="">Pneumatic--}}
                                                                                    {{--                                                                                Tools</a></li>--}}
                                                                                </ul>
                                                                    </li>
{{--                                                                @endif--}}
                                                                @endforeach
                                                            </div>
                                                        @endforeach
                                                        {{--                                                                <li class="megamenu__item  megamenu__item--with-submenu ">--}}
                                                        {{--                                                                    <a href="">Machine Tools</a>--}}
                                                        {{--                                                                    <ul class="megamenu__links megamenu__links--level--1">--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Thread--}}
                                                        {{--                                                                                Cutting</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Chip--}}
                                                        {{--                                                                                Blowers</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Sharpening--}}
                                                        {{--                                                                                Machines</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Pipe--}}
                                                        {{--                                                                                Cutters</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Slotting--}}
                                                        {{--                                                                                machines</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Lathes</a>--}}
                                                        {{--                                                                        </li>--}}
                                                        {{--                                                                    </ul>--}}
                                                        {{--                                                                </li>--}}
                                                        {{--                                                            </ul>--}}

                                                        {{--                                                        <div class="col-6">--}}
                                                        {{--                                                            <ul class="megamenu__links megamenu__links--level--0">--}}
                                                        {{--                                                                <li class="megamenu__item  megamenu__item--with-submenu ">--}}
                                                        {{--                                                                    <a href="">Hand Tools</a>--}}
                                                        {{--                                                                    <ul class="megamenu__links megamenu__links--level--1">--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Screwdrivers</a>--}}
                                                        {{--                                                                        </li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a--}}
                                                        {{--                                                                                href="">Handsaws</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Knives</a>--}}
                                                        {{--                                                                        </li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Axes</a>--}}
                                                        {{--                                                                        </li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a--}}
                                                        {{--                                                                                href="">Multitools</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Paint--}}
                                                        {{--                                                                                Tools</a></li>--}}
                                                        {{--                                                                    </ul>--}}
                                                        {{--                                                                </li>--}}
                                                        {{--                                                                <li class="megamenu__item  megamenu__item--with-submenu ">--}}
                                                        {{--                                                                    <a href="">Garden Equipment</a>--}}
                                                        {{--                                                                    <ul class="megamenu__links megamenu__links--level--1">--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Motor--}}
                                                        {{--                                                                                Pumps</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a--}}
                                                        {{--                                                                                href="">Chainsaws</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Electric--}}
                                                        {{--                                                                                Saws</a></li>--}}
                                                        {{--                                                                        <li class="megamenu__item"><a href="">Brush--}}
                                                        {{--                                                                                Cutters</a></li>--}}
                                                        {{--                                                                    </ul>--}}
                                                        {{--                                                                </li>--}}
                                                        {{--                                                            </ul>--}}
                                                        {{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .megamenu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="shop-grid-3-columns-sidebar.html">
                                            <div class="nav-links__item-body">
                                                Shop
                                                <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="shop-grid-3-columns-sidebar.html">
                                                            Shop Grid
                                                            <svg class="menu__item-arrow" width="6px" height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="menu__submenu">
                                                            <!-- .menu -->
                                                            <div class="menu menu--layout--classic ">
                                                                <div class="menu__submenus-container"></div>
                                                                <ul class="menu__list">
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="shop-grid-3-columns-sidebar.html">
                                                                            3 Columns Sidebar
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="shop-grid-4-columns-full.html">
                                                                            4 Columns Full
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="shop-grid-5-columns-full.html">
                                                                            5 Columns Full
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
{{--                                                    <li class="menu__item">--}}
{{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                        <div class="menu__item-submenu-offset"></div>--}}
{{--                                                        <a class="menu__item-link" href="{{route('getShopList')}}">--}}
{{--                                                            Shop List--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="shop-right-sidebar.html">
                                                            Shop Right Sidebar
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="product.html">
                                                            Product
                                                            <svg class="menu__item-arrow" width="6px" height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="menu__submenu">
                                                            <!-- .menu -->
                                                            <div class="menu menu--layout--classic ">
                                                                <div class="menu__submenus-container"></div>
                                                                <ul class="menu__list">
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link" href="product.html">
                                                                            Product
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="product-alt.html">
                                                                            Product Alt
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="product-sidebar.html">
                                                                            Product Sidebar
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="{{ route('cart.index') }}">
                                                            Cart
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="cart-empty.html">
                                                            Cart Empty
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="{{route('checkout')}}">
                                                            Checkout
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="{{route('account.order.success')}}">
                                                            Order Success
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="wishlist.html">
                                                            Wishlist
                                                        </a>
                                                    </li>
{{--                                                    <li class="menu__item">--}}
{{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                        <div class="menu__item-submenu-offset"></div>--}}
{{--                                                        <a class="menu__item-link" href="compare.html">--}}
{{--                                                            Compare--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="menu__item">--}}
{{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                        <div class="menu__item-submenu-offset"></div>--}}
{{--                                                        <a class="menu__item-link" href="track-order.html">--}}
{{--                                                            Track Order--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="{{route('account.dashboard')}}">
                                            <div class="nav-links__item-body">
                                                Account
                                                <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="{{route('b-shop.login')}}">
                                                            Login
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="{{route('account.dashboard')}}">
                                                            Dashboard
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="{{route('account.profile')}}">
                                                            Edit Profile
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="{{route('account.order.history')}}">
                                                            Order History
                                                        </a>
                                                    </li>
                                                    {{--                                                    <li class="menu__item">--}}
                                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                                    {{--                                                        <a class="menu__item-link" href="{{route('account.order.details')}}">--}}
                                                    {{--                                                            Order Details--}}
                                                    {{--                                                        </a>--}}
                                                    {{--                                                    </li>--}}
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="{{route('account.addresses')}}">
                                                            Address Book
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="{{route('account.edit.address')}}">
                                                            Edit Address
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="{{route('account.password')}}">
                                                            Change Password
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    {{--                                    <li class="nav-links__item  nav-links__item--has-submenu ">--}}
                                    {{--                                        <a class="nav-links__item-link" href="blog-classic.html">--}}
                                    {{--                                            <div class="nav-links__item-body">--}}
                                    {{--                                                Blog--}}
                                    {{--                                                <svg class="nav-links__item-arrow" width="9px" height="6px">--}}
                                    {{--                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>--}}
                                    {{--                                                </svg>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <div class="nav-links__submenu nav-links__submenu--type--menu">--}}
                                    {{--                                            <!-- .menu -->--}}
                                    {{--                                            <div class="menu menu--layout--classic ">--}}
                                    {{--                                                <div class="menu__submenus-container"></div>--}}
                                    {{--                                                <ul class="menu__list">--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="blog-classic.html">--}}
                                    {{--                                                            Blog Classic--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="blog-grid.html">--}}
                                    {{--                                                            Blog Grid--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="blog-list.html">--}}
                                    {{--                                                            Blog List--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="blog-left-sidebar.html">--}}
                                    {{--                                                            Blog Left Sidebar--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="post.html">--}}
                                    {{--                                                            Post Page--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="post-without-sidebar.html">--}}
                                    {{--                                                            Post Without Sidebar--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                </ul>--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <!-- .menu / end -->--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </li>--}}
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="">
                                            <div class="nav-links__item-body">
                                                Pages
                                                <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="{{route('aboutUs')}}">
                                                            About Us
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="{{route('contactUs')}}">
                                                            Contact Us
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="contact-us-alt.html">
                                                            Contact Us Alt
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="404.html">
                                                            404
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="{{route('terms-and-conditions')}}">
                                                            Terms And Conditions
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="faq.html">
                                                            FAQ
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="components.html">
                                                            Components
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="typography.html">
                                                            Typography
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    {{--                                    <li class="nav-links__item ">--}}
                                    {{--                                        <a class="nav-links__item-link"--}}
                                    {{--                                           href="https://themeforest.net/item/stroyka-tools-store-html-template/23326943">--}}
                                    {{--                                            <div class="nav-links__item-body">--}}
                                    {{--                                                Buy Theme--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                </ul>
                            </div>
                            <!-- .nav-links / end -->
                            <div class="nav-panel__indicators">
                                {{--                                <div class="indicator">--}}
                                {{--                                    <a href="wishlist.html" class="indicator__button">--}}
                                {{--                                            <span class="indicator__area">--}}
                                {{--                                                <svg width="20px" height="20px">--}}
                                {{--                                                    <use xlink:href="../images/sprite.svg#heart-20"></use>--}}
                                {{--                                                </svg>--}}
                                {{--                                                <span class="indicator__value">0</span>--}}
                                {{--                                            </span>--}}
                                {{--                                    </a>--}}
                                {{--                                </div>--}}
                                <div class="indicator indicator--trigger--click">
                                    <a href="{{route('cart.index')}}" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="../images/sprite.svg#cart-20"></use>
                                                </svg>
                                                <span
                                                    class="cart_qty"> @if(!empty($_COOKIE['cart_id'])) {{ Cart::session($_COOKIE['cart_id'])->getTotalQuantity() }} @endif</span>
                                            </span>
                                    </a>
                                    <div class="indicator__dropdown">
                                        <!-- .dropcart -->
                                        <div class="dropcart dropcart--style--dropdown">
                                            <div class="dropcart__body">
                                                <div class="dropcart__products-list">
                                                    @if(!empty($_COOKIE['cart_id']))
                                                        <?php  $productsCart = \Cart::session($_COOKIE['cart_id'])->getContent();?>
                                                        @foreach($productsCart as $product)
                                                            <div class="dropcart__product">
                                                                <div class="product-image dropcart__product-image">
                                                                    <a href="{{route('getProduct', $product->id)}}" class="product-image__body">
                                                                        <img class="product-image__img"
                                                                             src="{{asset('storage/' . $product->attributes->img)}}"
                                                                             alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="dropcart__product-info">
                                                                    <div class="dropcart__product-name"><a
                                                                            href="{{route('getProduct', $product->id)}}">{{\App\Models\Product::find($product->id)->name}}</a></div>
                                                                    <ul class="dropcart__product-options">
                                                                        <li>Color: Yellow</li>
                                                                        <li>Material: Aluminium</li>
                                                                    </ul>
                                                                    <div class="dropcart__product-meta">
                                                                        <span
                                                                            class="dropcart__product-quantity">{{$product->quantity}}</span>
                                                                        ×
                                                                        <span
                                                                            class="dropcart__product-price">{{$product->price}}</span>
                                                                    </div>
                                                                </div>
                                                                <button data-product-id="{{$product->id}}" type="button"
                                                                        class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                    <svg width="10px" height="10px">
                                                                        <use
                                                                            xlink:href="../images/sprite.svg#cross-10"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        @endforeach
                                                </div>
                                                <div class="dropcart__totals">
                                                    <table>
                                                    {{--                                                        <tr>--}}
                                                    {{--                                                            <th>Subtotal</th>--}}
                                                    {{--                                                            <td>$5,877.00</td>--}}
                                                    {{--                                                        </tr>--}}
                                                    {{--                                                        <tr>--}}
                                                    {{--                                                            <th>Shipping</th>--}}
                                                    {{--                                                            <td>$25.00</td>--}}
                                                    {{--                                                        </tr>--}}
                                                    {{--                                                        <tr>--}}
                                                    {{--                                                            <th>Tax</th>--}}
                                                    {{--                                                            <td>$0.00</td>--}}
                                                    {{--                                                        </tr>--}}
                                                    <!--                                                        --><?php //$total =  ?>
                                                        <tr>
                                                            <th>
                                                            Total: {{\Cart::session($_COOKIE['cart_id'])->getTotal()}} </td>
                                                        </tr>
                                                        @endif
                                                    </table>
                                                </div>
                                                <div class="dropcart__buttons">
                                                    <a class="btn btn-secondary" href="{{route('cart.index')}}">View
                                                        Cart</a>
                                                    <a class="btn btn-primary"
                                                       href="{{route('checkout')}}">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .dropcart / end -->
                                    </div>
                                </div>
                                <div class="indicator indicator--trigger--click">
                                    <a href="{{route('b-shop.login')}}" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="../images/sprite.svg#person-20"></use>
                                                </svg>
                                            </span>
                                    </a>
                                    <div class="indicator__dropdown">
                                        <div class="account-menu">
                                            @if(!Auth::check())
                                                <form class="account-menu__form" method="POST"
                                                      action="{{route('login')}}">
                                                    @csrf
                                                    <div class="account-menu__form-title">Log In to Your Account</div>
                                                    <div class="form-group">
                                                        <label for="header-signin-email" class="sr-only">Email
                                                            address</label>
                                                        <input name="email" id="header-signin-email" type="email"
                                                               class="form-control form-control-sm"
                                                               placeholder="Email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="header-signin-password"
                                                               class="sr-only">Password</label>
                                                        <div class="account-menu__form-forgot">
                                                            <input name="password" id="header-signin-password"
                                                                   type="password" class="form-control form-control-sm"
                                                                   placeholder="Password">
                                                            <a href=""
                                                               class="account-menu__form-forgot-link">Forgot?</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group account-menu__form-button">
                                                        <button type="submit" class="btn btn-primary btn-sm">Login
                                                        </button>
                                                    </div>
                                                    <div class="account-menu__form-link"><a
                                                            href="{{route('b-shop.login')}}">Create An Account</a></div>
                                                </form>
                                            @endif
                                            @if(Auth::check())
                                                <div class="account-menu__divider"></div>
                                                <a href="{{ route('account.dashboard') }}" class="account-menu__user">
                                                    <div class="account-menu__user-avatar">
                                                        <img
                                                            src="{{ asset('storage/' . \Illuminate\Support\Facades\Auth::user()->avatar) }}"
                                                            alt="">
                                                    </div>

                                                    <div class="account-menu__user-info">
                                                        <div
                                                            class="account-menu__user-name">{{Auth::user()->name}}</div>
                                                        <div
                                                            class="account-menu__user-email">{{ \App\Models\User::find(Auth::id())->email }}</div>
                                                    </div>
                                                    @endif
                                                </a>
                                                <div class="account-menu__divider"></div>
                                                <ul class="account-menu__links">
                                                    <li><a href="{{ route('account.profile') }}">Edit Profile</a></li>
                                                    <li><a href="{{ route('account.order.history') }}">Order History</a></li>
                                                    <li><a href="{{ route('account.edit.address') }}">Addresses</a></li>
                                                    <li><a href="{{ route('account.password') }}">Password</a></li>
                                                </ul>
                                                <div class="account-menu__divider"></div>
                                                <ul class="account-menu__links">
                                                    @if(Auth::check())
                                                        @csrf
                                                        <li><a href="{{route('account.logout')}}">Logout</a></li>
                                                    @endif
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- desktop site__header / end -->
    <!-- site__body -->
    @yield('content')
</div>

<!-- site__body / end -->
<!-- site__footer -->
<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">Contact Us</h5>
                            <div class="footer-contacts__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem.
                                Pellentque ac placerat tellus.
                            </div>
                            <ul class="footer-contacts__contacts">
                                <li><i class="footer-contacts__icon fas fa-globe-americas"></i> 715 Fake Street, New
                                    York 10021 USA
                                </li>
                                <li><i class="footer-contacts__icon far fa-envelope"></i> stroyka@example.com</li>
                                <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (800) 060-0730, (800)
                                    060-0730
                                </li>
                                <li><i class="footer-contacts__icon far fa-clock"></i> Mon-Sat 10:00pm - 7:00pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Information</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="" class="footer-links__link">About Us</a>
                                </li>
                                <li class="footer-links__item"><a href="" class="footer-links__link">Delivery
                                        Information</a></li>
                                <li class="footer-links__item"><a href="" class="footer-links__link">Privacy
                                        Policy</a></li>
                                <li class="footer-links__item"><a href="" class="footer-links__link">Brands</a></li>
                                <li class="footer-links__item"><a href="" class="footer-links__link">Contact Us</a>
                                </li>
                                <li class="footer-links__item"><a href="" class="footer-links__link">Returns</a>
                                </li>
                                <li class="footer-links__item"><a href="" class="footer-links__link">Site Map</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">My Account</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="{{route('contactUs')}}" class="footer-links__link">Store
                                        Location</a></li>
                                <li class="footer-links__item"><a href="{{route('contactUs')}}" class="footer-links__link">Feedback</a></li>
                                <li class="footer-links__item"><a href="{{route('account.order.history')}}" class="footer-links__link">Order
                                        History</a></li>
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">Wish List</a>--}}
{{--                                </li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">Newsletter</a>--}}
{{--                                </li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">Specials</a>--}}
{{--                                </li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">Gift--}}
{{--                                        Certificates</a></li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">Affiliate</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">Newsletter</h5>
                            <div class="footer-newsletter__text">
                                Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at
                                lacinia.
                            </div>
                            <form action="{{route('account.subscribe.create')}}" method="POST"
                                  class="footer-newsletter__form">
                                @csrf
                                <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                                <input name="email" required type="text"
                                       class="footer-newsletter__form-input form-control"
                                       id="footer-newsletter-address" placeholder="Email Address...">
                                <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                            </form>
                            @if(session('successMail'))
                                <div class="alert-success">
                                    {{session('successMail')}}
                                </div>
                            @endif
                            @if(session('cloneMail'))
                                <div class="alert-danger">{{session('cloneMail')}}</div>
                            @endif
                            <div class="footer-newsletter__text footer-newsletter__text--social">
                                Follow us on social networks
                            </div>
                            <!-- social-links -->
                            <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                <ul class="social-links__list">
                                    <li class="social-links__item">
                                        <a class="social-links__link social-links__link--type--rss" href=""
                                           target="_blank">
                                            <img src="{{asset('../images/icons/rss.png')}}" width="35">
                                        </a>
                                    </li>
                                    <li class="social-links__item">
                                        <a class="social-links__link social-links__link--type--youtube" href=""
                                           target="_blank">
                                            <img src="{{asset('../images/icons/youtube.png')}}" width="35">
                                        </a>
                                    </li>
                                    <li class="social-links__item">
                                        <a class="social-links__link social-links__link--type--facebook" href=""
                                           target="_blank">
                                            <img src="{{asset('../images/icons/facebook.png')}}" width="35">
                                        </a>
                                    </li>
                                    <li class="social-links__item">
                                        <a class="social-links__link social-links__link--type--twitter" href=""
                                           target="_blank">
                                            <img src="{{asset('../images/icons/twitter.png')}}" width="35">
                                        </a>
                                    </li>
                                    <li class="social-links__item">
                                        <a class="social-links__link social-links__link--type--instagram" href=""
                                           target="_blank">
                                            <img src="{{asset('../images/icons/instagram.png')}}" width="35">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- social-links / end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="site-footer__copyright">
                    <!-- copyright -->
                    Powered by HTML — Design by <a href="https://themeforest.net/user/kos9" target="_blank">Kos</a>
                    <!-- copyright / end -->
                </div>
                <div class="site-footer__payments">
{{--                    <img src="images/payments.png" alt="">--}}
                    <a href="https://www.liqpay.ua/ru"><img src="{{asset('../images/icons/liqpay.png')}}" alt="" height="50"></a>
                </div>
            </div>
        </div>
        <div class="totop">
            <div class="totop__body">
                <div class="totop__start"></div>
                <div class="totop__container container"></div>
                <div class="totop__end">
                    <button type="button" class="totop__button">

                        <svg width="13px" height="8px">
                            <use xlink:href="../images/sprite.svg#arrow-rounded-up-13x8"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- site__footer / end -->
</div>
<!-- site / end -->
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
    </div>
</div>
<!-- quickview-modal / end -->
<!-- mobilemenu -->
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Menu</div>
            <button type="button" class="mobilemenu__close">
                <svg width="20px" height="20px">
                    <use xlink:href="images/sprite.svg#cross-20"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse
                data-collapse-opened-class="mobile-links__item--open">
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="index.blade.php" class="mobile-links__item-link">Home</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index.blade.php" class="mobile-links__item-link">Home 1</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index-2.blade.php" class="mobile-links__item-link">Home 2</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="offcanvas-cart.blade.php" class="mobile-links__item-link">Offcanvas
                                        Cart</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="" class="mobile-links__item-link">Categories</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Power Tools</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Engravers</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Wrenches</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Wall Chaser</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Pneumatic Tools</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Machine Tools</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Thread Cutting</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Chip Blowers</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Sharpening Machines</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Pipe Cutters</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Slotting machines</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Lathes</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="shop-grid-3-columns-sidebar.blade.php" class="mobile-links__item-link">Shop</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="shop-grid-3-columns-sidebar.blade.php" class="mobile-links__item-link">Shop
                                        Grid</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="shop-grid-3-columns-sidebar.blade.php"
                                                   class="mobile-links__item-link">3 Columns Sidebar</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="shop-grid-4-columns-full.html" class="mobile-links__item-link">4
                                                    Columns Full</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="shop-grid-5-columns-full.html" class="mobile-links__item-link">5
                                                    Columns Full</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="shop-list.blade.php" class="mobile-links__item-link">Shop List</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="shop-right-sidebar.html" class="mobile-links__item-link">Shop Right
                                        Sidebar</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="product.blade.php" class="mobile-links__item-link">Product</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="product.blade.php" class="mobile-links__item-link">Product</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="product-alt.blade.php" class="mobile-links__item-link">Product
                                                    Alt</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="product-sidebar.blade.php" class="mobile-links__item-link">Product
                                                    Sidebar</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="cart.blade.php" class="mobile-links__item-link">Cart</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="cart-empty.blade.php" class="mobile-links__item-link">Cart Empty</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="checkout.blade.php" class="mobile-links__item-link">Checkout</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="order-success.blade.php" class="mobile-links__item-link">Order Success</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="wishlist.blade.php" class="mobile-links__item-link">Wishlist</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="compare.blade.php" class="mobile-links__item-link">Compare</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="track-order.blade.php" class="mobile-links__item-link">Track Order</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="account-login.blade.php" class="mobile-links__item-link">Account</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-login.blade.php" class="mobile-links__item-link">Login</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-dashboard.html" class="mobile-links__item-link">Dashboard</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-profile.blade.php" class="mobile-links__item-link">Edit Profile</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-orders.blade.php" class="mobile-links__item-link">Order History</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-order-details.blade.php" class="mobile-links__item-link">Order
                                        Details</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-addresses.html" class="mobile-links__item-link">Address Book</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-edit-address.html" class="mobile-links__item-link">Edit Address</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-password.blade.php" class="mobile-links__item-link">Change
                                        Password</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="blog-classic.blade.php" class="mobile-links__item-link">Blog</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-classic.blade.php" class="mobile-links__item-link">Blog Classic</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-grid.blade.php" class="mobile-links__item-link">Blog Grid</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-list.blade.php" class="mobile-links__item-link">Blog List</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-left-sidebar.blade.php" class="mobile-links__item-link">Blog Left
                                        Sidebar</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="post.blade.php" class="mobile-links__item-link">Post Page</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="post-without-sidebar.blade.php" class="mobile-links__item-link">Post
                                        Without
                                        Sidebar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="" class="mobile-links__item-link">Pages</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="about-us.html" class="mobile-links__item-link">About Us</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="contact-us.blade.php" class="mobile-links__item-link">Contact Us</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="contact-us-alt.blade.php" class="mobile-links__item-link">Contact Us
                                        Alt</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="404.blade.php" class="mobile-links__item-link">404</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="terms-and-conditions.blade.php" class="mobile-links__item-link">Terms And
                                        Conditions</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="faq.blade.php" class="mobile-links__item-link">FAQ</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="components.blade.php" class="mobile-links__item-link">Components</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="typography.html" class="mobile-links__item-link">Typography</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a data-collapse-trigger class="mobile-links__item-link">Currency</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">€ Euro</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">£ Pound Sterling</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">$ US Dollar</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">₽ Russian Ruble</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a data-collapse-trigger class="mobile-links__item-link">Language</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">English</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">French</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">German</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Russian</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Italian</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- mobilemenu / end -->
<!-- photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<!-- photoswipe / end -->
<!-- js -->
<script src="{{asset('../jquery/jquery.min.js')}}"></script>
<script src="{{asset('../js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('../js/bootstrap.min.js')}}"></script>
<script src="{{asset('../js/owl.carousel.min.js')}}"></script>
<script src="{{asset('../js/nouislider.min.js')}}"></script>
<script src="{{asset('../js/photoswipe.min.js')}}"></script>
<script src="{{asset('../js/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('../js/select2.min.js')}}"></script>
<script src="{{asset('../js/number.js')}}"></script>
<script src="{{asset('../js/main.js')}}"></script>
<script src="{{asset('../js/header.js')}}"></script>
<script src="{{asset('../js/svg4everybody.min.js')}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/@json-editor/json-editor@latest/dist/jsoneditor.min.js"></script>--}}
<script>
    svg4everybody();
</script>
<script>
    $(document).ready(function () {
        $('.product-card__addtocart').click(function () {
            addToCart($(this).data('product-id'))
            let qty = 1
            let total_qty = parseInt($('.cart_qty').text())
            total_qty += qty
            $('.cart_qty').text(total_qty)
            // location.reload();
        })
    })

    $(document).ready(function (){
        $('.Add_To_Cart').click(function (){
            editCartQuantity($(this).data('product-id'),$(this).parent().parent().find('#product-quantity').val())
           let total_qty = parseInt($('.cart_qty').text())
            total_qty += parseInt($(this).parent().parent().find('#product-quantity').val())
            $('.cart_qty').text(total_qty)
        })
    })

    function editCartQuantity(id, quantity) {
        $.ajax({
            url: "{{route('add.to.cart')}}",
            type: "POST",
            data: {
                id: id,
                quantity: quantity
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data)
            }
        })
    }
    function addToCart(id) {
        $.ajax({
            url: "{{route('add.to.cart')}}",
            type: "POST",
            data: {
                id: id,
                quantity: 1
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data)
            }
        })
    }
</script>
<script>
    $(document).ready(function () {
        $('.dropcart__product-remove').click(function () {
            deleteCart($(this).data('product-id'))
            location.reload();
        })
    })

    $(document).ready(function () {
        $('.btn-svg-icon').click(function () {
            deleteCart($(this).data('product-id'))
            location.reload();
        })
    })

    function deleteCart(id) {
        $.ajax({
            url: "{{route('delete.cart')}}",
            type: "POST",
            data: {
                id: id
                // quantity: 4
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data)
            }
        })
    }
</script>
<script>
    $(document).ready(function () {
        $('.input-number__add').click(function () {
            addQuantity($(this).data('product-id'))
            let qty = 1
            let total_qty = parseInt($('.cart_qty').text())
            total_qty += qty
            $('.cart_qty').text(total_qty)
            location.reload();
        })
    })


    $(document).ready(function () {
        $('.input-number__sub').click(function () {
            deleteQuantity($(this).data('product-id'))
            let qty = 1
            let total_qty = parseInt($('.cart_qty').text())
            total_qty -= qty
            $('.cart_qty').text(total_qty)
            // location.reload();
        })
    })

    function addQuantity(id) {
        $.ajax({
            url: "{{route('edit.quantity')}}",
            type: "POST",
            data: {
                id: id,
                add_quantity: 1
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data)
            }
        })
    }

    function deleteQuantity(id) {
        $.ajax({
            url: "{{route('edit.quantity')}}",
            type: "POST",
            data: {
                id: id,
                delete_quantity: 1
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data)
            }
        })
    }
</script>
<script>
    $(document).ready(function (){
        $('#pagination-select').click(function (){
            paginateQuantitySelect($(this).val())
            // location.reload()
        })
    })

    function paginateQuantitySelect(quantity){
        $.ajax({
            url: "{{route('getShopList', 1)}}",
            type: "GET",
            data: {
                quantity: quantity
            },
            success: (data) => {
                console.log(data)
            }
        })
    }

    $(document).ready(function () {
            $('.Filter-Button').click(function () {
                console.log($('#filter__container').data('from'))
            })
        }
    )
</script>
</body>

</html>

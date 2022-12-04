

<body id="index" class="lang-ar lang-rtl country-gb currency-gbp layout-full-width page-index tax-display-enabled">
    <main id="main-site" class="displayhomenovthree">
        <header id="header" class="header-3 sticky-menu">
            <div class="header-mobile hidden-md-up">
                <div class="hidden-md-up text-xs-center mobile d-flex align-items-center justify-content-end">
                    <div id="_mobile_mainmenu" class="item-mobile-top"><i class="material-icons d-inline">menu</i></div>
                    <div class="mobile_logo ml-auto mr-auto">
                        <a href="">
                            <img class="logo-mobile img-fluid" src="{{ asset('uploads/site-images/logo.png') }}"
                                alt="Prestashop_Savemart">
                        </a>
                    </div>
                    <div id="_mobile_menutop"
                        class="item-mobile-top nov-toggle-page d-flex align-items-center justify-content-center"
                        data-target="#mobile-pagemenu"><i class="material-icons">more_horiz</i></div>
                </div>
                <div id="_mobile_search">
                    <div id="_mobile_search_content"></div>
                </div>
            </div>

            <div class="header-top hidden-sm-down">
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div
                                class="header-top-left col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                                <div class="detail-email d-flex align-items-center justify-content-center">
                                    <i class="icon-email"></i>
                                    <span>
                                        Enginx@enginx.com
                                    </span>
                                </div>

                                <div class="detail-call d-flex align-items-center justify-content-center mx-2">
                                    <i class="icon-deal"></i>

                                    <p><a href="{{ route('services.show', 1) }}">خدمات</a></p>
                                </div>
                                {{--  programms --}}
                                <div class="detail-call d-flex align-items-center justify-content-center mx-2">
                                    <i class="icon-deal"></i>

                                    <p><a href="{{ route('programs.show', 2) }}">برامج</a></p>
                                </div>
                                {{--  our customers --}}
                                <div class="detail-call d-flex align-items-center justify-content-center mx-2">
                                    <i class="icon-deal"></i>
                                    <p><a href="{{ route('customer.index') }}"> عملاؤنا </a></p>

                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 d-flex justify-content-end align-items-center header-top-right">
                                <div class="register-out">
                                    @auth
                                        <ul class="navbar-nav ml-auto">
                                            <!-- Authentication Links -->
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href=""
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}<span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="navbarDropdown">
                                                    <form action="{{ route('logout') }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-outline-danger my-2">تسجيل خروج</button>

                                                    </form>

                                                </div>
                                            </li>
                                        </ul>

                                    @endauth
                                    @guest
                                        <i class="zmdi zmdi-account"></i>
                                        <a class="register" href="{{ route('register') }}"
                                            data-link-action="display-register-form">
                                            عمل حساب جديد
                                        </a>

                                        <a class="login" href="{{ route('login') }}" rel="nofollow"
                                            title="تسجيل الدخول إلى حسابك"> <i class="zmdi zmdi-account"></i>تسجيل
                                            دخول</a>
                                    @endguest
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

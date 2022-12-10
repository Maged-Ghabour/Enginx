<body>
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="top-left">
                            <ul class="menu-top-link">
                                <li>
                                    <div class="select-position">
                                        <select id="select4">
                                            <option value="0" selected>$ USD</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="select-position">
                                        <select id="select5">
                                            <option value="0" selected>English</option>
                                            <option value="4">العربية</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="top-middle">
                            <ul class="useful-links">
                                <li><a href="{{ route('Home') }}">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    @if (isset(Auth::User()->name))
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="col-12">
                                <div class=" row col-12">
                                    <div class="col-6">
                                        <a href="{{ route('profile', [Auth::User()->id]) }}" class="fs-6 text-light"
                                            style="font-size: 1px;">
                                            <i class="lni lni-user"></i>
                                            Hello {{ Auth::User()->name }}
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn text-light ">تسجيل
                                                خروج</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="top-end">
                                <div class="user">
                                    <i class="lni lni-user"></i>
                                    Hello
                                </div>
                                <ul class="user-login">
                                    <li>
                                        <a href="{{ route('login') }}">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- End Topbar -->

<div class="header-center hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div id="_desktop_logo"
                class="contentsticky_logo d-flex align-items-center justify-content-start col-lg-3 col-md-3">
                <a href="{{ route('Home') }}">
                    <img src={{ asset('Dashboard/dist/img/LOGO.png') }} width="50" class="img-circle elevation-2"
                        alt="User Image">

                </a>
            </div>
            <div class="col-lg-9 col-md-9 header-menu d-flex align-items-center justify-content-end">
                <div class="data-contact d-flex align-items-center">
                    <div class="title-icon">support<i class="icon-support icon-address"></i></div>
                    <div class="content-data-contact">
                        <div class="support">الإتصال بخدمة العملاء</div>
                        <div class="phone-support">
                            1234 567 899
                        </div>
                    </div>
                </div>
                <div class="contentsticky_group d-flex justify-content-end">
                    <div class="header_link_myaccount">
                        <a class="login" href="" rel="nofollow" title="تسجيل الدخول إلى حسابك"><i
                                class="header-icon-account"></i></a>
                    </div>
                    <div class="header_link_wishlist">
                        <a href="" title="My Wishlists">
                            <i class="header-icon-wishlist"></i>
                        </a>
                    </div>


                    <!-- begin module:ps_shoppingcart/ps_shoppingcart.tpl -->
                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_shoppingcart/ps_shoppingcart.tpl -->
                    @include("Front.Cart.cartHead")

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Header Middle -->
<div class="header-middle">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3 col-7">
                <!-- Start Header Logo -->
                <a class="navbar-brand" href="{{ route('Home') }}">
                    <img class="rounded-circle" src="uploads/site-images/logo.png" alt="Logo">
                </a>
                <!-- End Header Logo -->
            </div>
            <div class="col-lg-5 col-md-7 d-xs-none">
                <!-- Start Main Menu Search -->
                <div class="main-menu-search">
                    <!-- navbar search start -->
                    <div class="navbar-search search-style-5">
                        <div class="search-select">
                            <div class="select-position">
                                <select id="select1">
                                    <option selected>All</option>
                                    @foreach ($categories as $category)
                                        <option>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="search-input">
                            <input type="text" placeholder="Search">
                        </div>
                        <div class="search-btn">
                            <button><i class="lni lni-search-alt"></i></button>
                        </div>
                    </div>
                    <!-- navbar search Ends -->
                </div>
                <!-- End Main Menu Search -->
            </div>
            <div class="col-lg-4 col-md-2 col-5">
                <div class="middle-right-area">
                    <div class="nav-hotline">
                        <i class="lni lni-phone"></i>
                        <h3>Customer Service:
                            <span>(+100) 123 456 7890</span>
                        </h3>
                    </div>
                    <div class="navbar-cart">
                        <div class="wishlist">
                            <a href="javascript:void(0)">
                                <i class="lni lni-heart"></i>
                                <span class="total-items">0</span>
                            </a>
                        </div>
                        <div class="cart-items">
                            <a href="javascript:void(0)" class="main-btn">
                                <i class="lni lni-cart"></i>
                                <span class="total-items">2</span>
                            </a>
                            <!-- Shopping Item -->
                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>2 Items</span>
                                    <a href="{{ route('cart.index') }}">View Cart</a>
                                </div>
                                <ul class="shopping-list">
                                    for each products here to be shown in cart
                                    <li>
                                        <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                class="lni lni-close"></i></a>
                                        <div class="cart-img-head">
                                            <a class="cart-img" href="product-details.html"><img
                                                    src="assets/images/header/cart-items/item1.jpg" alt="#"></a>
                                        </div>

                                        <div class="content">
                                            <h4><a href="product-details.html">
                                                    Apple Watch Series 6</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">$134.00</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('checkout') }}" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Middle -->

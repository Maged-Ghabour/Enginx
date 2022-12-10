<!-- Start Header Middle -->
<div class="header-middle">
    <div class="container">
        <div class="row align-items-between">
            <x-cart-menu />
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
            <div class="col-lg-4 col-md-3 col-5">
                <div class="middle-right-area">
                    <div class="nav-hotline">
                        <i class="lni lni-phone"></i>
                        <h3>Customer Service:
                            <span>(+100) 123 456 7890</span>
                        </h3>
                    </div>
                    <!-- Start Header Logo -->
                    <a class="navbar-brand" href="{{ route('Home') }}">
                        <img class="rounded-circle" src="{{ asset('uploads/site-images/logo.png') }}" alt="Logo">
                    </a>
                    <!-- End Header Logo -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Middle -->

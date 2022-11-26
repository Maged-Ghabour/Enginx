<div class="header-bottom hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="contentsticky_verticalmenu verticalmenu-main col-lg-3 col-md-1 d-flex"
                data-textshowmore="Show More" data-textless="Hide" data-desktop_item="4">
                <div class="toggle-nav d-flex align-items-center justify-content-start">
                    <span class="btnov-lines"></span>
                    <span>Shop By Categories</span>
                </div>
                <div class="verticalmenu-content has-showmore show">
                    <div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="6">
                        <div class="box-content block_content">
                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                <ul class="menu level1">
                                    @foreach ($categories as $category)
                                        <li class="item  parent group"><a
                                                href="{{ route('Category.show', $category->id) }}"
                                                title="Laptops &amp; Accessories"><i class="hasicon nov-icon"
                                                    style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/laptop.png') no-repeat scroll center center;"></i>
                                                {{ $category->name }}
                                            </a>
                                            <span class="show-sub fa-active-sub"></span>
                                            <span class="menu-sub-title">
                                                @foreach ($category->products as $product)
                                                    {{ $product->name }},
                                                @endforeach
                                            </span>
                                            <div class="dropdown-menu" style="width:222px">
                                                <ul>
                                                    @foreach ($sub_categories as $cat)
                                                        @if ($cat->parent_id == $category->id)
                                                            <li class="item ">
                                                                <a href="#"
                                                                    title="sub_category">{{ $cat->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-11 header-menu d-flex align-items-center justify-content-start">

                {{-- Header Search --}}
                <div class="header-menu-search d-flex justify-content-between w-100 align-items-center">

                    <div id="_desktop_top_menu">

                        <nav id="nov-megamenu" class="clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div id="megamenu" class="nov-megamenu clearfix">
                                <ul class="menu level1">
                                    <li class="item home-page has-sub"><span class="opener"></span><a href="?home"
                                            title="Home"><i class="zmdi zmdi-home"></i>Jobs</a>
                                        <div class="dropdown-menu" style="width:200px">
                                            <ul class="">
                                                <li class="item "><a href="?home=home_1" title="Homepage 1">Homepage
                                                        1</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item  has-sub"><span class="opener"></span><a href="#"
                                            title="Blog"><i class="zmdi zmdi-library"></i>Offers</a>
                                        <div class="dropdown-menu" style="width:270px">
                                            <ul class="">
                                                <li class="item "><a
                                                        href="/savemart/en/index.php?fc=module&amp;module=smartblog&amp;id_post=14&amp;controller=details"
                                                        title="Blog detail">Blog detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item menu-page group"><span class="opener"></span><a
                                            href="{{ route('Product.index') }}" title="Pages"><i
                                                class="zmdi zmdi-assignment"></i>Products</a>
                                        <div class="dropdown-menu">
                                            <ul class="">
                                                <li class="item container group">
                                                    <div class="dropdown-menu">
                                                        <ul class="">
                                                            <li class="item col-md-3 mw-20 html"><span
                                                                    class="menu-title">Category
                                                                    Style</span>
                                                                <div class="menu-content">
                                                                    <ul class="col">
                                                                        <li><a href="/savemart/en/3-clothing">Category
                                                                                Layout Grid</a></li>

                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="item col-md-3 mw-20 html"><span
                                                                    class="menu-title">Product Detail
                                                                    Style</span>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a
                                                                                href="/savemart/index.php?id_product=1&id_product_attribute=1&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_1">Left
                                                                                Column</a></li>
                                                                        <li><a
                                                                                href="/savemart/index.php?id_product=1&id_product_attribute=1&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_1">Left
                                                                                Column</a></li>

                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="item col-md-3 mw-20 html"><span
                                                                    class="menu-title">Bonus Page</span>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a
                                                                                href="/savemart/en/index.php?controller=page-not-found">404
                                                                                Page</a></li>
                                                                        <li><a
                                                                                href="/savemart/index.php?controller=contact">Contact
                                                                                Us Page</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="item col-md-3 mw-40 html">
                                                                <div class="menu-content">
                                                                    <div class="menu-banner-3 text-center">
                                                                        <a href="#"><img class="img-fluid"
                                                                                src="http://images.vinovathemes.com/prestashop_savemart/mega-menu-3.jpg"
                                                                                alt="mega-menu-3.jpg" /></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item  group"><span class="opener"></span><a
                                            href="{{ route('Category.index') }}" title="Categories"><i
                                                class="zmdi zmdi-group"></i>Categories</a>
                                        <div class="dropdown-menu">
                                            <ul class="">
                                                <li class="item container group">
                                                    <div class="dropdown-menu">
                                                        <ul class="">
                                                            <li class="item col-lg-3 col-md-3 html"><span
                                                                    class="menu-title">Laptop</span>
                                                                <div class="menu-content">
                                                                    <ul class="col">
                                                                        <li><a href="#"
                                                                                title="EliteBook">EliteBook</a>
                                                                        </li>
                                                                        Pavilion</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @foreach ($categories as $category)
                                                    <li class="item col-lg-3 col-md-3 html">
                                                        <span class="menu-title">
                                                            <a
                                                                href="{{ route('Category.show', $category->id) }}">{{ $category->name }}</a>
                                                        </span>
                                                        <div class="menu-content">
                                                            <ul class="col">
                                                                @foreach ($sub_categories as $cat)
                                                                    @if ($cat->parent_id == $category->id)
                                                                        <li>
                                                                            <a
                                                                                href="{{ route('Sub_Category.Show', [$category->id, $cat->id]) }}">
                                                                                {{ $cat->name }}
                                                                            </a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach

                                                            </ul>
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item container group">
                                        <div class="dropdown-menu">
                                            <ul class="">
                                                <li class="item  html">
                                                    <div class="menu-content">
                                                        <div class="row">
                                                            @foreach ($categories as $category)
                                                                <div
                                                                    class="col-12 col-lg-3 col-md-3 mt-xs-10 text-center">
                                                                    <a href="#"><img class="img-fluid"
                                                                            src="{{ asset('uploads/Categories/' . $category->image) }}"
                                                                            alt="" /></a>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            </li>
                            </ul>

                        </nav>
                    </div>

                </div>
                {{-- End Header Search --}}

                {{-- Search Bar --}}
                <div class="advencesearch_header">
                    <span class="toggle-search hidden-lg-up"><i class="zmdi zmdi-search"></i></span>
                    <div id="_desktop_search" class="contentsticky_search">

                        <div id="desktop_search_content" data-id_lang="6" data-ajaxsearch="1"
                            data-novadvancedsearch_type="top" data-instantsearch="" data-search_ssl=""
                            data-link_search_ssl="http://demo.bestprestashoptheme.com/savemart/ar/بحث"
                            data-action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result">
                            <form method="get"
                                action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result"
                                id="searchbox" class="form-novadvancedsearch">
                                <input type="hidden" name="fc" value="module">
                                <input type="hidden" name="module" value="novadvancedsearch">
                                <input type="hidden" name="controller" value="result">
                                <input type="hidden" name="orderby" value="position" />
                                <input type="hidden" name="orderway" value="desc" />
                                <input type="hidden" name="id_category" class="id_category" value="0" />
                                <div class="input-group">
                                    <input type="text" id="search_query_top"
                                        class="search_query ui-autocomplete-input form-control" name="search_query"
                                        value="" placeholder="Search" />

                                    <div class="input-group-btn nov_category_tree hidden-sm-down">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" value="" aria-expanded="false">
                                            CATEGORIES
                                        </button>
                                        <ul class="dropdown-menu list-unstyled">
                                            <li class="dropdown-item " data-value="2">
                                                <span>Home Page</span>
                                            </li>
                                            <li class="dropdown-item " data-value="2">
                                                <a href="{{ route('Category.index') }}">
                                                    <span>All Categories</span>
                                                </a>
                                            </li>
                                            <ul class="list-unstyled pl-5">
                                                @foreach ($categories as $category)
                                                    <li class="dropdown-item" data-value="3">
                                                        <a href="{{ route('Category.show', $category->id) }}">
                                                            <span class="text-primary">{{ $category->name }}</span>
                                                        </a>
                                                    </li>
                                                    @foreach ($sub_categories as $cat)
                                                        @if ($cat->parent_id == $category->id)
                                                            <li class="dropdown-item" data-value="10">
                                                                <a
                                                                    href="{{ route('Sub_Category.Show', [$category->id, $cat->id]) }}">
                                                                    <span> {{ $cat->name }} -- </span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                        </ul>
                                    </div>

                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="submit" name="submit_search"><i
                                                class="material-icons">search</i></button>
                                    </span>
                                </div>

                            </form>
                        </div>


                    </div>
                </div>
                {{-- End Search Bar --}}
            </div>
        </div>
    </div>
</div>
</div>
</header>

<div class="header-bottom hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="contentsticky_verticalmenu verticalmenu-main col-lg-3 col-md-1 d-flex"
                data-textshowmore="Show More" data-textless="Hide" data-desktop_item="4">
                <div class="toggle-nav d-flex align-items-center justify-content-start">
                    <span class="btnov-lines"></span>
                    <span>البحث بالأقسام</span>
                </div>
                <div class="verticalmenu-content has-showmore">
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
                                                                <a href="{{ route('Sub_Category.Show', [$category->id, $cat->id]) }}"
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
                                            title="Home"><i class="zmdi zmdi-home"></i>الوظائف</a>
                                        <div class="dropdown-menu" style="width:200px">
                                            <ul class="">
                                                <li class="item "><a href="{{ route('MyJops') }}"
                                                        title="الصفحة الرئيسية">الوظائف</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item  has-sub"><span class="opener"></span><a href="#"
                                            title="Blog"><i class="zmdi zmdi-library"></i>العروض</a>
                                        <div class="dropdown-menu" style="width:270px">
                                            <ul class="">
                                                <li class="item "><a
                                                        href="/savemart/en/index.php?fc=module&amp;module=smartblog&amp;id_post=14&amp;controller=details"
                                                        title="Blog detail">جميع العروض</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item menu-page group"><span class="opener"></span><a
                                            href="{{ route('Product.index') }}" title="المنتجات"><i
                                                class="zmdi zmdi-assignment"></i>المنتجات</a>
                                        <div class="dropdown-menu">
                                            <ul class="">
                                                <li class="item container group">
                                                    <div class="dropdown-menu">
                                                        <ul class="">
                                                            @foreach ($products as $product)
                                                                <li class="item col-lg-2 mw-20 html">
                                                                    <span class="menu-title">
                                                                        <a
                                                                            href="{{ route('Product.show', $product->id) }}">
                                                                            {{ $product->name }}
                                                                        </a>
                                                                    </span>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- {{ route('Category.index') }} -->
                                    <li class="item  group"><span class="opener"></span><a
                                            href="" title="الأقسام"><i
                                                class="zmdi zmdi-group"></i>الأقسام</a>
                                        <div class="dropdown-menu">
                                            <ul class="">

                                                <li class="item container group">
                                                    <div class="dropdown-menu">
                                                        <ul class="">
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

                        <div id="desktop_search_content" data-id_lang="6" data-ajaxsearch="1">
                            <form method="get" action="" id="searchbox" class="form-novadvancedsearch">

                                <div class="input-group">
                                    <input onkeyup="showResult(this.value)" type="text" id="search_query_top"
                                        class="search_query ui-autocomplete-input form-control" name="key"
                                        placeholder="بحث" />
                                    <div id="searchProduct"></div>

                                    <div class="input-group-btn nov_category_tree hidden-sm-down">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" value="" aria-expanded="false">
                                            الأقسام
                                        </button>
                                        <ul class="dropdown-menu list-unstyled">
                                            <li class="dropdown-item " data-value="2">
                                                <span>الرئيسية</span>
                                            </li>
                                            <li class="dropdown-item " data-value="2">
                                                <a href="{{ route('Category.index') }}">
                                                    <span>كل الأقسام</span>
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
                                                class="material-icons">بحث</i></button>
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
<script>
    function showResult(str) {
        let searchProduct = document.getElementById('search_query_top').value;
        let url = "{{ url('enginx/products/search') }}" + "/";
        if (str.length == 0) {
            document.getElementById("searchProduct").innerHTML = "";
            document.getElementById("searchProduct").style.border = "0px";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("searchProduct").innerHTML = this.responseText;
                document.getElementById("searchProduct").style.border = "2px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET", url + searchProduct, true);
        xmlhttp.send();
    }
</script>
</header>

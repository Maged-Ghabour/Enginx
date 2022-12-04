@extends('Front.layouts.app')

@section('title', 'Enginx')

@section('content')
    {{-- database prooducts --}}
@include('Front.includes.display-top')

    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <section id="content" class="page-home pagehome-three">
                    <div class="container">
                        <div class="row">
                            <div class="nov-row  col-lg-12 col-xs-12">
                                <div class="nov-row-wrap row">
                                    <div
                                        class="nov-productlist nov-countdown-productlist col-xl-4 col-lg-4 col-md-4  col-xs-12 col-md-12">
                                        <div class="block block-product clearfix">
                                            <h2 class="title_block">
                                                العروض المتاحة
                                            </h2>
                                            <div class="block_content">
                                                <div id="productlist706506225"
                                                    class="product_list countdown-productlist countdown-column-1 owl-carousel owl-theme" >




                                                    {{-- Start Offers Show --}}
                                                    @forelse ($offers as $offer)
                                                        <div class="item item-list">
                                                            <div class="product-miniature js-product-miniature first_item"
                                                                data-id-product="12" data-id-product-attribute="232"
                                                                itemscope itemtype="http://schema.org/Product">
                                                                <div class="thumbnail-container">
                                                                    <a href=""
                                                                        class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid"
                                                                            src="{{ asset('uploads/Offers/' . $offer->image) }}"
                                                                            width="600" height="600">

                                                                    </a>
                                                                    <div class="product-flags discount">Sale</div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">

                                                                        <div class="product-title" itemprop="name"><a
                                                                                href="">
                                                                            </a>
                                                                            {{ $offer->title }}
                                                                        </div>
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price"
                                                                                    class="price">{!! $offer->description !!} UK£</span>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="product-buttons d-flex justify-content-center" >


                                                                        <form
                                                                            action=""
                                                                            method="post" class="formAddToCart">


                                                                            <a class="add-to-cart" href="#"  data-button-action="add-to-cart">
                                                                               <i class="novicon-cart"></i><span>أضف للسلة</span></a>

                                                                        </form>

                                                                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                        {{-- <a class="addToWishlist wishlistProd_12"
                                                                            href="#" data-rel="12"
                                                                            onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">
                                                                            <i class="fa fa-heart"></i>
                                                                            <span>Add to Wishlist</span>
                                                                        </a> --}}
                                                                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                        {{-- <a href="#" class="quick-view hidden-sm-down"
                                                                            data-link-action="quickview">
                                                                            <i class="fa fa-search"></i><span> نظرة
                                                                                سريعة</span>
                                                                        </a> --}}
                                                                    </div>

                                                                </div>

                                                                <!-- begin modules/novthemeconfig/views/templates/hook/countdown.tpl -->
                                                                <div class="countdownfree d-flex"
                                                                    data-date="{{ $offer->expire_date }}">
                                                                </div>

                                                                <!-- end modules/novthemeconfig/views/templates/hook/countdown.tpl -->

                                                            </div>
                                                        </div>
                                                    @empty
                                                        <h3 class="badge badge-primary">لا يوجد عروض متاحة</h3>
                                                    @endforelse
                                                    {{-- End Offers Show --}}


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Start Showing Products Section  --}}
                                    <div
                                        class="nov-productlist  productlist-rows col-xl-8 col-lg-8 col-md-8 col-xs-12 col-md-12">
                                        <div class="block block-product clearfix">
                                            <h2 class="title_block">
                                                آخر المنتجات
                                            </h2>
                                            <div class="block_content">
                                                <div id="productlist1693764381"
                                                    class="product_list grid owl-carousel owl-theme multi-row"
                                                    data-autoplay="false" data-autoplayTimeout="6000" data-loop="false"
                                                    data-margin="30" data-dots="false" data-nav="true" data-items="2"
                                                    data-items_large="2" data-items_tablet="3" data-items_mobile="1">

                                                    @forelse ($products as $product)
                                                        <div class="item text-center">
                                                            <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item"
                                                                data-id-product="1" data-id-product-attribute="40"
                                                                itemscope itemtype="http://schema.org/Product">
                                                                <div class="col-12 col-w40 pl-0">
                                                                    <div class="thumbnail-container">
                                                                        <a href="#"
                                                                            class="thumbnail product-thumbnail">
                                                                            <img class="img-fluid image-cover"
                                                                                src="{{ asset('uploads/Products/' . $product->image) }}"
                                                                                alt="" width="600"
                                                                                height="600">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-w60 no-padding">
                                                                    <div class="product-description">
                                                                        <div class="product-groups">

                                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                            <div class="product-title" itemprop="name">
                                                                                <a
                                                                                    href="{{ route('Product.show', $product->id) }}">
                                                                                    {{ $product->name }}
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span itemprop="price"
                                                                                        class="price">{{ $product->price }} جنية </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span itemprop="price"
                                                                                        class="price">{{ $product->category->name }} </span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span itemprop="price"
                                                                                        class="price">{!! $product->description !!} </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center"   >

                                                                            <form action="" method="post" class="formAddToCart">

                                                                                @csrf


                                                                                <a class="add-to-cart" href="#"
                                                                                data-id="{{$product->id}}"><i
                                                                                        class="novicon-cart"></i><span>أضف
                                                                                        للسلة</span></a>
                                                                            </form>

                                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                            {{-- <a class="addToWishlist wishlistProd_1"
                                                                                href="#" data-rel="1"
                                                                                onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>أضف الى المفضلة</span>
                                                                            </a> --}}
                                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                            {{-- <a href="#"
                                                                                class="quick-view hidden-sm-down"
                                                                                data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                    نظرة سريعة</span>
                                                                            </a> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @empty
                                                      <h3 class="badge badge-primary">لا يوجد منتجات متاحة</h3>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                        @if ($products->count() > 0)
                                            <div class="d-flex justify-content-center align-item-center">
                                                <a class="btn btn-outline-primary w-25 p-4 m-3 "
                                                    href="{{ route('Product.index') }}">إستكشف كل المنتجات</a>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- End Showing Products Section --}}

                                </div>
                            </div>

                            {{-- Start Showing Category Section --}}
                            <div class="nov-row  col-lg-12 col-xs-12">
                                <div class="nov-row-wrap row">
                                    @forelse ($categories as $category)
                                        <div
                                            class="nov-productlist   productlist-liststyle col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">
                                            <div class="block block-product clearfix">
                                                <h2 class="title_block">
                                                    <a href="{{ route('Category.show', $category->id) }}">
                                                        {{ $category->name }}
                                                    </a>
                                                </h2>
                                                <div class="block_content">
                                                    <div id="productlist162539295"
                                                        class="product_list grid owl-carousel owl-theme multi-row"
                                                        data-autoplay="false" data-autoplayTimeout="6000"
                                                        data-loop="false" data-margin="0" data-dots="false"
                                                        data-nav="true" data-items="1" data-items_large="1"
                                                        data-items_tablet="2" data-items_mobile="1">
                                                        <div class="item text-center">
                                                            @forelse ($category->products as $product)
                                                                @if ($product->category_id == $category->id)
                                                                    <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                                        data-id-product="1" data-id-product-attribute="40"
                                                                        itemscope itemtype="http://schema.org/Product">
                                                                        <div class="col-12 col-w27 no-padding">
                                                                            <div class="thumbnail-container">
                                                                                <a href=""
                                                                                    class="thumbnail product-thumbnail">
                                                                                    <img class="img-fluid image-cover"
                                                                                        src="{{ asset('uploads/Products/' . $product->image) }}"
                                                                                        alt=""
                                                                                        data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                                                        width="600" height="600">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-w73 no-padding">
                                                                            <div class="product-description">
                                                                                <div class="product-groups">

                                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                                    <div class="product-title"
                                                                                        itemprop="name"><a
                                                                                            href="{{ route('Product.show', $product->id) }}">{{ $product->name }}</a>
                                                                                    </div>
                                                                                    <div class="product-group-price">
                                                                                        <div
                                                                                            class="product-price-and-shipping">
                                                                                            <span itemprop="price"
                                                                                                class="price"> جنية
                                                                                                {{ $product->price }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @empty
                                                                <h3 class="badge badge-priamry">لايوجد منتجات متاحة في القسم</h3>
                                                            @endforelse

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        لا يوجد أقسام متاحة
                                    @endforelse
                                </div>
                            </div>
                            {{-- End Showing Category Section --}}


                        </div>
                        @if ($categories->count() > 0)
                            <div class="d-flex justify-content-center align-item-center">
                                <a class="btn btn-outline-primary w-25 p-4 m-3 "
                                    href="{{ route('Category.index') }}">إستكشف كل الأقسام</a>
                            </div>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
<script>
    const csrf_token = "{{ csrf_token() }}";
</script>
<script src="{{asset('js/cart.js')}}"></script>

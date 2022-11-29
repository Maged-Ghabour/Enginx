@extends('Front.layouts.app')

@section('title', 'Enginx')

@section('content')
    <div class="container">
        <div class="">
            <div class="block block-product clearfix">
                <h2 class="">
                    {{ $sub_cat->name }}
                </h2>
                <h2 class="text-center mt-3 pb-5">كل منتجات القسم الفرعى</h2>
                <div class="row">
                    @forelse ($sub_cat->products as $product)
                        @if ($product->category_id == $sub_cat->id)
                            <div class="col-lg-3 col-md-6 col-sm-12 course_box pb-5">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="img-fluid image-cover"
                                            src="{{ asset('uploads/Products/' . $product->image) }}" alt=""
                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                            width="600" height="600">
                                        <div class="product-comments">
                                            <div class="star_content">
                                                <div class="star star_on">
                                                </div>
                                                <div class="star star_on">
                                                </div>
                                                <div class="star star_on">
                                                </div>
                                                <div class="star star_on">
                                                </div>
                                                <div class="star star_on">
                                                </div>
                                            </div>
                                            <span>5 تقييمات</span>
                                        </div>
                                        <div class="product-description">
                                            <div class="product-groups">
                                                <div class="product-title" itemprop="name"><a
                                                        href="{{ route('Product.show', $product->id) }}">{{ $product->name }}</a>
                                                </div>
                                                <div class="product-group-price">
                                                    <div class="product-price-and-shipping">
                                                        <span itemprop="price" class="price">L£
                                                            {{ $product->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope
                                        itemtype="http://schema.org/Offer">
                                        <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق"
                                            method="post" class="formAddToCart">
                                            <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                                            <input type="hidden" name="id_product" value="1">
                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                    class="novicon-cart"></i><span>أضف
                                                    للسلة</span></a>
                                        </form>

                                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1"
                                            onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
                                            <i class="fa fa-heart"></i>
                                            <span>أضف الى المفضلة</span>
                                        </a>

                                    </div>
                                </div>
                        @endif
                    @empty
                        <p class="text-danger">لا يوجد منتجات ف القسم الفرعى</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('Front.layouts.app')

@section('title', $product->name . ' Show')

@section('content')
    <div class="container mt-5 pb-3">
        <div class="row">
            <div class="col-md-12 m-auto m-5 p-5">
                <div class="d-flex justify-content-between">
                    <div class="col-md-4">
                        <img class="img-fluid image-cover" src="{{ asset('uploads/Products/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                            width="600" height="600">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between">
                            <h3>{{ $product->name }}</h3>
                            <h4>
                                <a href="{{ route('Category.show', $product->category->id) }}">
                                    {{ $product->category->name }}</a>
                            </h4>
                        </div>
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
                            <span>5 review</span>
                        </div>
                        <p class="m-2 p-2 text-muted">{!! $product->description !!}</p>
                        <p class='text-primary'>${{ $product->price }}</p>
                        <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post"
                                class="formAddToCart">
                                <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                                <input type="hidden" name="id_product" value="1">
                                <a class="add-to-cart  btn btn-outline-light" href="#"
                                    data-button-action="add-to-cart"><i class="novicon-cart fa fa-plus"></i><span>Add To
                                        Cart
                                    </span></a>
                            </form>

                            <a class="addToWishlist wishlistProd_1  btn btn-outline-light" href="#" data-rel="1"
                                onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
                                <i class="fa fa-heart"></i>
                                <span>Add to Wishlist</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

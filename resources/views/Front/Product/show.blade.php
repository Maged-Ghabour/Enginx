@extends('Front.layouts.app')

@section('title', $product->name . ' Show')

@section('content')
    <div class="container mt-5 pb-3">

    <!--  Add To Cart -->
    @if(session("cart_added"))

        <!-- I'll Make Here Modal --->
    @endif




    <form action="{{route('cart.store')}}" method="post" class="formAddToCart">
    @csrf
        <div class="row">
            <div class="col-md-12 m-auto m-5 p-5">
                <div class="d-flex justify-content-between">
                    <div class="col-md-4">
                        <img class="img-fluid image-cover" src="{{ asset('uploads/Products/' . $product->image) }}"
                            alt="{{ $product->name }}"
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



                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="product-quantity">
                                    <span class="control-label">الكميَّة : </span>
                                    <div class="qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <input type="text" name="quantity" id="quantity_wanted" value="1" class="input-group form-control" min="1" style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>

                                        </div>
                                    </div>
                                  </div>

                                  <div class="add">
                                    <button class="btn btn-primary add-to-cart" data-toggle="modal" data-target="#exampleModal" type="submit">
                                        <div class="icon-cart">
                                            <i class="shopping-cart"></i>
                                        </div>
                                        <span>أضف للسلة</span>
                                    </button>
                                </div>


                            </form>





                                            <!--- End Add To Cart -->






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



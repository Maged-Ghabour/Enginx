@extends('Front.layouts.app')

@section('title', 'Enginx')

@section('content')
    <div class="container">
        <div class="nov-row-wrap row">
            <div class="nov-productlist productlist-liststyle">
                <div class="block block-product clearfix">
                    <h2 class="title_block">
                        {{ $sub_cat->name }}
                    </h2>
                    <h2 class="text-center mt-3 pb-5">All Category Products</h2>
                    <div class="row">
                        @forelse ($sub_cat->products as $product)
                            @if ($product->category_id == $sub_cat->id)
                                <div class="col-lg-3 course_box">
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
                                                <span>5 review</span>
                                            </div>
                                            <div class="product-description">
                                                <div class="product-groups">
                                                    <div class="product-title" itemprop="name"><a
                                                            href="">{{ $product->name }}</a>
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
                                    </div>
                                </div>
                            @endif
                        @empty
                            <p class="text-danger">No Products in this category</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

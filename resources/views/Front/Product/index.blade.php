@extends('Front.layouts.app')


@section('title', 'All Prodcuts')
@section('content')
    {{-- Start Showing Products  --}}
    <h2 class="text-center mt-3 pb-5">All Category Products</h2>
    <div class="container mt-3 pb-4">
        <div class="row">
            @forelse ($products as $product)
                <div class="col-lg-3 course_box">
                    <div class="card">
                        <div class="card-body text-center">
                            <img class="img-fluid image-cover" src="{{ asset('uploads/Products/' . $product->image) }}"
                                alt=""
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
                                            href="{{ route('Product.show', $product->id) }}">{{ $product->name }}</a>
                                    </div>
                                    <div class="product-title" itemprop="name">
                                        <a href="">Category: {{ $product->category->name }}</a>
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

            @empty
                <p class="text-danger">No Products Found</p>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center w-100">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
    {{-- End Showing Products --}}
@endsection

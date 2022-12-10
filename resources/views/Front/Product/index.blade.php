@extends('Front.layouts.app')

@section('title', 'Products')

@section('content')
    {{-- Start Showing Products  --}}

    <div class="container mt-3 pb-4">
        <div class="section-title">
            <h2> Avilable Products</h2>
        </div>
        <div class="row mt-3 mb-3">
            @forelse ($products as $product)
                <div class="col-lg-3 course_box">
                    <div class="card mt-3 mb-3">
                        <div class="card-body text-center">

                            <img class="img-fluid image-cover" src="{{ asset('uploads/Products/' . $product->image) }}"
                                alt=""
                                data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                width="600" height="600">
                            <div class="button mt-2">
                                <a href="{{ route('Product.show', $product->id) }}" class="btn"><i
                                        class="lni lni-cart"></i> Add to
                                    Cart</a>
                            </div>

                            <div class="product-description">
                                <div class="product-groups">
                                    <div class="product-title" itemprop="name"><a
                                            href="{{ route('Product.show', $product->id) }}">{{ $product->name }}</a>
                                    </div>
                                    <div class="product-title" itemprop="name">
                                        <a href=""> {{ $product->category->name }} Category</a>
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
                <p class="text-danger">No avilable products </p>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center  w-100 p-5">
        {{ $products->links() }}
    </div>
    {{-- End Showing Products --}}
@endsection

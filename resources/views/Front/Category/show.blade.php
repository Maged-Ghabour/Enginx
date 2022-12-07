@extends('Front.layouts.app')


@section('aside')
    <aside id="notifications">
        <div class="container">
        </div>
    </aside>
@endsection

@section('content')
    {{-- Start Showing Category Section --}}
    <h2 class="text-center mt-3 pb-5">Avilable Products </h2>

    <div class="container mt-3 pb-4">

        {{-- End Showing Sub Categories --}}

        {{-- Start Showing Category Products  --}}

        <div class="row">
            @forelse ($category->products as $product)
                @if ($product->category_id == $category->id)
                    <div class="col-lg-3 course_box">
                        <div class="card mt-3 mb-3">
                            <div class="card-body text-center">
                                <img class="img-fluid image-cover" src="{{ asset('uploads/Products/' . $product->image) }}"
                                    alt=""
                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                    width="600" height="600">

                                <div class="product-description">
                                    <div class="product-groups">
                                        <div class="product-title" itemprop="name">
                                            <a href="{{ route('Product.show', $product->id) }}">{{ $product->name }}</a>
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
                <p class="text-danger">NO avilable products </p>
            @endforelse
        </div>
        {{-- End Showing Category Products --}}


    </div>

    {{-- End Showing Category Section --}}
@endsection

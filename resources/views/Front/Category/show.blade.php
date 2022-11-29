@extends('Front.layouts.app')

@section('title', 'Enginx Categories')

@section('aside')
    <aside id="notifications">
        <div class="container">
        </div>
    </aside>
@endsection

@section('content')

    {{-- Start Showing Category Section --}}
    <div class="container">
        <div class="nov-row-wrap row">
            <div class="nov-productlist productlist-liststyle">
                <div class="block block-product clearfix">
                    <h2 class="title_block">
                        {{ $category->name }}
                    </h2>

                    {{-- Showing Sub Categories --}}
                    <h2 class="text-center mt-3 pb-5">الأقسام الفرعية</h2>
                    <div class="row">
                        @forelse ($sub_cats as $cat)
                            @if ($cat->parent_id == $category->id)
                                <div class="col-lg-3 course_box">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img class="img-fluid image-cover"
                                                src="{{ asset('uploads/Categories/' . $cat->image) }}"
                                                alt="{{ $cat->image }}" width="600" height="600">

                                            <div class="product-description">
                                                <div class="product-groups">
                                                    <div class="product-title" itemprop="name">
                                                        <a
                                                            href="{{ route('Sub_Category.Show', [$category->id, $cat->id]) }}">{{ $cat->name }}</a>
                                                    </div>

                                                    <a href="#" class="m-3 p-3">
                                                        منتجات القسم الفرعى
                                                        <span class="badge badge-primary">{{ $cat->products->count() }}
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="m-2 p-2">
                                                <a href="{{ route('Sub_Category.Show', [$category->id, $cat->id]) }}"
                                                    class="btn btn-primary d-flex justify-content-center"
                                                    data-link-action="quickview">
                                                    <i class="fa fa-search"></i>
                                                    <span>رؤية القسم الفرعى</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <p class="text-danger">لا يوجد أقسام فرعية للقسم </p>
                        @endforelse
                    </div>
                    {{-- End Showing Sub Categories --}}

                    {{-- Start Showing Category Products  --}}
                    <h2 class="text-center mt-3 p-5">كل منتجات القسم</h2>
                    <div class="row">
                        @forelse ($category->products as $product)
                            @if ($product->category_id == $category->id)
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
                                    </div>
                                </div>
                            @endif
                        @empty
                            <p class="text-danger">لا يوحد منتجات فى هذا القسم</p>
                        @endforelse
                    </div>
                    {{-- End Showing Category Products --}}
                </div>
            </div>
        </div>

    </div>

    {{-- End Showing Category Section --}}
@endsection

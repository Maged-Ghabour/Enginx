@extends('Front.layouts.app')

@section('title', 'Enginx Categories')


@section('content')
    <div class="container">
        <div class="nov-row  col-lg-12 col-xs-12">
            <div class="nov-row-wrap row">
                {{-- Category => products --}}
                @forelse ($categories as $category)
                    <div class="nov-productlist productlist-liststyle col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">
                        <div class="block block-product clearfix">
                            <h2 class="title_block">
                                {{ $category->name }}
                            </h2>
                            <div class="block_content">
                                <div id="productlist162539295" class="product_list grid owl-carousel owl-theme">
                                    <div class="item text-center">
                                        <div
                                            class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item">
                                            <div class="col-12 col-w100 no-padding">
                                                <div class="thumbnail-container">
                                                    <a href="" class="thumbnail product-thumbnail">
                                                        <img class="img-fluid image-cover"
                                                            src="{{ asset('uploads/Categories/' . $category->image) }}"
                                                            alt=""
                                                            data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                            width="600" height="600">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center col-w100 ">
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-comments d-flex justify-content-center">
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
                                                        <div class="product-title d-flex justify-content-center"
                                                            itemprop="name">{{ $category->description }}
                                                        </div>

                                                        <div class="product-title d-flex justify-content-between">
                                                            <a href="#">
                                                                <span
                                                                    class="badge badge-primary">{{ $category->products_count }}</span>
                                                                منتجات القسم
                                                            </a>

                                                            <a href="#">
                                                                <span
                                                                    class="badge badge-primary">{{ $category->children_count }}</span>
                                                                الأقسام الفرعية
                                                            </a>

                                                        </div>
                                                        <a href="{{ route('Category.show', $category->id) }}"
                                                            class="btn btn-primary d-flex justify-content-center"
                                                            data-link-action="quickview">
                                                            <i class="fa fa-search"></i>
                                                            <span>رؤية القسم</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    </div>
    <div class="d-flex justify-content-center align-items-center w-100">
        {{ $categories->links('pagination::bootstrap-4') }}
    </div>
@endsection

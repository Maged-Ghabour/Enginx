@extends('Front.layouts.app')

@section('title', 'كل العروض')


@section('content')
    <div class="block block-product clearfix">
        <h2 class="title_block">
            العروض المتاحة
        </h2>
        <div class="block_content">
            {{-- Start Offers Show --}}
            @forelse ($offers as $offer)
                <div class="item item-list">
                    <div class="product-miniature js-product-miniature first_item" data-id-product="12"
                        data-id-product-attribute="232" itemscope itemtype="http://schema.org/Product">
                        <div class="thumbnail-container">
                            <a href="" class="thumbnail product-thumbnail two-image">
                                <img class="img-fluid" src="{{ asset('uploads/Offers/' . $offer->image) }}" width="600"
                                    height="600">

                            </a>
                            <div class="product-flags discount">Sale</div>
                        </div>
                        <div class="product-description">
                            <div class="product-groups">

                                <div class="product-title" itemprop="name"><a href="">
                                    </a>
                                    {{ $offer->title }}
                                </div>

                                <div class="product-group-price">
                                    <div class="product-price-and-shipping">
                                        <span itemprop="price" class="price">{!! $offer->description !!} UK£</span>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- begin modules/novthemeconfig/views/templates/hook/countdown.tpl -->
                        <div class="countdownfree d-flex" data-date="{{ $offer->expire_date }}">
                        </div>

                        <!-- end modules/novthemeconfig/views/templates/hook/countdown.tpl -->

                    </div>
                </div>
            @empty
                لا يوجد عروض متاحة
            @endforelse
            {{-- End Offers Show --}}
        </div>
    </div>
@endsection

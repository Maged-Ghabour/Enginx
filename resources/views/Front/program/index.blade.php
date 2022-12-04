<style>
    .isotop-btn {
        text-align: center;
        margin-bottom: 45px;
    }

    .isotop-btn:after {
        display: none;
    }

    .isotop-btn a {
        background-color: #ffffff;
        color: #444444;
        padding: 8px 20px;
        font-size: 18px;
        display: inline-block;
        margin: 0 3px 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        border-radius: 5px;
        cursor: pointer;
        -webkit-box-shadow: 0px 2px 4px 0px rgba(206, 216, 221, 0.75);
        -moz-box-shadow: 0px 2px 4px 0px rgba(206, 216, 221, 0.75);
        box-shadow: 0px 2px 4px 0px rgba(206, 216, 221, 0.75);
        -webkit-transition: all 0.5s ease-out;
        -moz-transition: all 0.5s ease-out;
        -ms-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }

    .isotop-btn a:hover {
        background-color: #396cf0;
        color: #ffffff;
    }

    .isotop-btn .current {
        background-color: #396cf0;
        color: #ffffff;
    }
</style>
@extends('Front.layouts.app')

@section('title', 'Enginx Categories')


@section('content')


    <div class="container ">


        <div class="block block-product clearfix   nov-productlist productlist-liststyle   nov-row-wrap row">
            <h2 class="title_block ">
                {{ $category->name }}
            </h2>
        </div>
        <div class="row ">

            @forelse ($category->products as $product)
                @if ($product->category_id == $category->id)
                    <div class="col">
                        <div class="card" style="width: 18rem; border-radius: 10px;">
                            <img src="{{ asset('uploads/Products/' . $product->image) }}" class="img-fluid"
                                style="background: cover; border-radius: 10px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text"></p>
                                <a href="{{ route('Product.show', $product->id) }}"
                                    class="btn btn-secondary effect-btn mx-5">
                                    اضف الى السلة</a>
                            </div>
                        </div>
                @endif
            @empty
                <p class="text-danger">لا يوحد منتجات فى هذا القسم</p>
            @endforelse
        </div>
    </div>
    </div>
    </div>
    <hr width="75%" class="my-5">
    <div class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="text-center">
                <div class="isotop-filter-menu isotope-classes-tab isotop-btn">
                    @forelse ($sub_cats as $cat)
                        @if ($cat->parent_id == $category->id)
                            <a href="{{ route('show_sub_cat', [$category->id, $cat->id]) }}" value=""
                                class="current nav-item">{{ $cat->name }}</a>
                        @endif
                    @empty
                        <p class="text-danger">لا يوجد أقسام فرعية للقسم </p>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($sub_cats as $sub)
                @foreach ($sub->products as $product)
                    <div class="col">
                        <div class="card" style="width: 18rem; border-radius: 10px;">
                            <img src="{{ asset('uploads/Products/' . $product->image) }}" class="img-fluid"
                                style="background: cover; border-radius: 10px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text"></p>
                                <a href="{{ route('Product.show', $product->id) }}"
                                    class="btn btn-secondary effect-btn mx-5">
                                    اضف الى السلة</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @empty <p class="text-danger">لا يوحد منتجات فى هذا القسم</p>
            @endforelse
        </div>
    </div>

@endsection

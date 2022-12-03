@extends('Front.layouts.app')

@section('title', 'Enginx Categories')


@section('content')


    <div class="container">
        <div class="nov-row-wrap row">
            <div class="nov-productlist productlist-liststyle">
                <div class="block block-product clearfix">
                    <h2 class="title_block">
                        {{ $category->name }}
                    </h2>
                    <div class="row">
                        @forelse ($sub_cats as $cat)
                            @if ($cat->parent_id == $category->id)
                                <div class="d-flex justify-content-center flex-wrap pt-5 pb-5">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('sub_cat', [$category->id, $cat->id]) }}" value=""
                                            class="btn btn-primary m-2 text-center">{{ $cat->name }}</a>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <p class="text-danger">لا يوجد أقسام فرعية للقسم </p>
                        @endforelse
                    </div>
                    <div class="row ">
                        @forelse ($category->products as $product)
                            @if ($product->category_id == $category->id)
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('uploads/Products/' . $product->image) }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <p class="card-text"></p>
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
    </div>
    </div>
    <div class="container">
        <div class="row">
            @forelse ($sub_cats as $sub)
                @foreach ($sub->products as $product)
                    <div class="card" style="width: 18rem;"><img src="{{ asset('uploads/Products/' . $product->image) }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $product->name }}
                            </h5>
                        </div>
                    </div>
                @endforeach
            @empty <p class="text-danger">لا يوحد منتجات فى هذا القسم</p>
            @endforelse
        </div>
    </div>


@endsection

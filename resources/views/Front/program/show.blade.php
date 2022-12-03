@extends('Front.layouts.app')

@section('title', 'Enginx')

@section('content')
    <div class="row">
        @forelse ($sub_cats as $cat)
            @if ($cat->parent_id == $category->id)
                <div class="d-flex justify-content-center flex-wrap pt-5 pb-5">

                    <div class="d-flex justify-content-center">
                        <a href="{{ route('show_sub_cat', [$category->id, $cat->id]) }}" value=""
                            class="btn btn-primary m-2 text-center">{{ $cat->name }}</a>
                    </div>
                </div>
            @endif
        @empty
            <p class="text-danger">لا يوجد أقسام فرعية للقسم </p>
        @endforelse
    </div>
    <div class="container">
        <div class="row">
            @forelse ($sub_cat->products as $product)
                <div class="col-4">
                    <div class="card">
                        <img src="{{ asset('uploads/Products/' . $product->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text"><?php echo "$product->description"; ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-danger">لا يوجد منتجات ف القسم الفرعى</p>
            @endforelse
        </div>
    </div>
    </div>
@endsection

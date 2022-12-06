@extends('Front.layouts.app')

@section('title', $product->name)

@section('content')
    <div class="container mt-5 pb-3">

        <!--  Add To Cart -->
        @if (session('cart_added'))
            <!-- I'll Make Here Modal --->
        @endif




        <form action="{{ route('cart.store') }}" method="post" class="formAddToCart">
            @csrf
            <div class="row mt-3 mb-3">
                <div class="col-md-12 m-auto m-5 p-5">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-4">
                            <img class="img-fluid image-cover" src="{{ asset('uploads/Products/' . $product->image) }}"
                                alt="{{ $product->name }}" width="300" height="300">
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex justify-content-between">
                                <h3>{{ $product->name }}</h3>
                                <h4 class="text-primary">
                                    <a href="{{ route('Category.show', $product->category->id) }}">
                                        {{ $product->category->name }}</a>
                                </h4>
                            </div>
                            <p class="d-flex justify-content-between text-muted">{!! $product->description !!}</p>
                            <p class='text-primary d-flex justify-content-between p-2 m-2'>{{ $product->price }} £E </p>



                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="product-quantity ">
                                <span class="control-label "> Quantity</span>
                                <div class="qty">
                                    <div class="input-group ">
                                        <input type="text" name="quantity" id="quantity_wanted" value="1"
                                            class="input-group form-control" min="1" style="display: block;">
                                        <span class="input-group-addon bootstrap-touchspin-postfix"
                                            style="display: none;"></span>

                                    </div>
                                </div>
                            </div>

                            <div class="add float-end mt-5">
                                <button class="btn btn-primary add-to-cart mx-2" data-toggle="modal"
                                    data-target="#exampleModal" type="submit">
                                    <span class="d-block">Add To Cart </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </form>

        <!--- End Add To Cart -->

    </div>




@endsection

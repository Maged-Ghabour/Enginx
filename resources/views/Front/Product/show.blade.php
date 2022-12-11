@extends('Front.layouts.app')

@section('title', $product->name)

@section('content')
    <div class="container mt-5 pb-3">

        <!--  Add To Cart -->
        @if (session('cart_added'))
            <!-- I'll Make Here Modal --->
        @endif



        {{-- <form action="{{ route('cart.store') }}" method="post" class="formAddToCart">
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
                                <h5 class="text-primary ">
                                    <a href="{{ route('Category.show', $product->category->id) }}">
                                        {{ $product->category->name }} Category</a>
                                </h5>
                            </div>
                            <p class="d-flex justify-content-between text-muted">{!! $product->description !!}</p>
                            <p class="d-flex justify-content-between text-primary ">{{ $product->price }} £E </p> --}}
                            {{-- <div class="col-lg-4 col-md-4 col-12 mt-2">
                                <div class="form-group quantity">
                                    <label for="color">Quantity</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div> --}}

                                        {{-- <div class="qty">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <div class="product-quantity input-group">
                                            <input type="text" name="quantity" id="quantity_wanted" value="1" class="input-group form-control" min="1" style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>

                                        </div>
                                    </div>




                            <div class="add mt-5">
                                <button class="btn btn-primary add-to-cart mx-2" data-toggle="modal"
                                    data-target="#exampleModal" type="submit">
                                    <span class="d-block">Add To Cart </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </form> --}}




        <form action="{{route('cart.store')}}" method="post" class="formAddToCart">
            @csrf
                <div class="row">
                    <div class="col-md-12 m-auto m-5 p-5">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-4">
                                <img class="img-fluid image-cover" src="{{ asset('uploads/Products/' . $product->image) }}"
                                    alt="{{ $product->name }}"
                                    width="600" height="600">
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between">
                                    <h3>{{ $product->name }}</h3>
                                    <h4>
                                        <a href="{{ route('Category.show', $product->category->id) }}">
                                            {{ $product->category->name }}</a>
                                    </h4>
                                </div>
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
                                <p class="m-2 p-2 text-muted">{!! $product->description !!}</p>
                                <p class='text-primary'>${{ $product->price }}</p>
                                <div class="product-buttons d-flex justify-content-center flex-column" >



                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <div class="product-quantity">
                                            <span class="control-label">الكميَّة : </span>
                                            <div class="qty">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" id="quantity_wanted" value="1" class="input-group form-control" min="1" style="display: block;">
                                                    <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>

                                                </div>
                                            </div>
                                          </div>

                                          <div class="add">
                                            <button class="btn btn-primary add-to-cart mx-2"  data-toggle="modal" data-target="#exampleModal" type="submit">
                                                <span class="d-block">أضف للسلة</span>
                                            </button>
                                         </div>


            </form>


        <!--- End Add To Cart -->

    </div>




@endsection

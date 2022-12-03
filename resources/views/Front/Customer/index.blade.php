@extends('Front.layouts.app')


@section('title', 'عملاؤنا')
@section('content')
    {{-- Start Showing customers  --}}
    <h2 class="text-center mt-3 pb-5">عملاؤنا </h2>
    <div class="container mt-3 pb-4">
        <div class="row">
            @forelse ($customers as $customer)
                <div class="col-lg-3 course_box ">
                    <div class="card">
                        <div class="card-body text-center">

                            <a href="{{ route('customer.show', $customer->id) }}"> <img class="img-fluid image-cover"
                                    src="{{ asset('uploads/Customers/' . $customer->image) }}" alt=""
                                    data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg"
                                    width="600" height="600"> </a>


                            {{--
                            <div class="customer-description">
                                <div class="customer-groups">
                                    <div class="customer-title" itemprop="name">
                                        <a href="{{ route('customer.show', $customer->id) }}">{{ $customer->name }}</a>
                                    </div>
                                </div>
                            </div>
                            --}}

                        </div>
                        {{-- client descreption
                        <div class="col-8 mx-auto d-flex bg-info mw-100 text-center">
                            <h2 class="mt-5 bg-info text-center mw-100 "><?= $customer->title ?></h2>
                        </div>

                        <div class="col-8 mx-auto d-flex bg-info mw-100">
                            <h4 class="mt-5 bg-info mw-100"><?= $customer->description ?></h4>
                        </div>
                        --}}

                    </div>
                </div>

            @empty
                <p class="text-danger">لا يوجد عملاء</p>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center w-100 p-5">
        {{ $customers->links('pagination::bootstrap-4') }}
    </div>
    {{-- End Showing customers --}}
@endsection

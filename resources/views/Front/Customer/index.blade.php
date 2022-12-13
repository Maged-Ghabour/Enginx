@extends('Front.layouts.app')


@section('title', 'Our Customers')

@section('content')

    {{-- Start Showing customers  --}}
    <div class="container mt-3 pb-4">


        <div class="section-title">
            <h2 class="animate__animated animate__backInUp animate__delay-1s" style="color: #17a7ec">{{__("app.clients")}}</h2>

        </div>


        <div class="row">
            @forelse ($customers as $customer)
                <div class="col-lg-3 course_box">

                    <div class="client-card card h-100">
                        <!-- Start Single Customer -->
                        <div class="card-client-body card-body text-center">

                            <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                                <img src="{{ asset('uploads/Customers/' . $customer->image) }}" class="w-100" />

                                <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>

                            </div>
                            <div class="client-opacity"></div>
                            <div class="client-content">
                                <div class="product-info">
                                    <h4 class="title"> {{ $customer->title }}</h4>
{{--
                                    <div class="description">
                                        <span> {!! $customer->description !!}</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End Single Customer -->
                    </div>


                </div>
            @empty
                <p class="text-danger">NO Avilable customers </p>
            @endforelse
        </div>
    </div>



    <div class="d-flex justify-content-center align-items-center w-100 p-5">
        {{ $customers->links() }}
    </div>
    {{-- End Showing customers --}}
@endsection

@extends('Front.layouts.app')


@section('title', 'Our Customers')

@section('content')

    {{-- Start Showing customers  --}}
    <div class="container mt-3 pb-4">


        <div class="section-title">
            <h2> Our Clients</h2>

        </div>


        <div class="row">
            @forelse ($customers as $customer)
                <div class="col-lg-3 course_box">

                    <div class="card">
                        <!-- Start Single Customer -->
                        <div class="card-body text-center">

                            <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                                <img src="{{ asset('uploads/Customers/' . $customer->image) }}" class="w-100" />

                                <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>

                            </div>
                            <div class="product-info">
                                <h4 class="title"> {{ $customer->title }}</h4>

                                <div class="description">
                                    <span> {!! $customer->description !!}</span>
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

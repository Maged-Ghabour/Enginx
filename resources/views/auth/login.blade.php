<style>
    .d-none {
        display: none;
    }

    .d-block {
        display: block;
        color: red;
    }
</style>
@extends('Front.layouts.app')

@section('title', 'تسجيل الدخول')

@push('styles')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/animsition/css/animsition.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endpush
@section('content')
    <div class="limiter">
        <div class="container mt-2 pt-3">

            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url({{ asset('front/images/bg-01.jpg') }})">
                    <h3 class="login100-form-title-1 text-center">
                        تسجيل دخول العميل
                    </h3>
                </div>
                <div class="container d-flex justify-content-center ">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-8 bg-light p-3">
                        {{-- Valdation Admin Error --}}
                        @if (session()->has('error'))
                            <div class="alert alert-danger mt-2 text-center">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <form class="" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group" data-validate="Email is required">
                                <span class="label-input100">البريد الإلكترونى :</span>
                                <input class="input100 form-control w-100" type="email" name="email"
                                    placeholder="أدلخ البريد الإلكترونى">
                                <span class="focus-input100" id="erremail"></span>
                            </div>

                            <div class="form-group" data-validate="Password is required">
                                <span class="label-input100">الرقم السرى</span>
                                <input class="input100 form-control w-100" type="password" name="password"
                                    placeholder="أدخل الرقم السرى">
                                <span class="focus-input100" id="errpass"></span>
                            </div>
                            <div class="block mt-4 pb-1">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="form-group rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">تذكرنى</span>
                                </label>
                            </div>

                            <div class="d-flex justify-content-between mt-3 w-50 pb-2">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        هل نسيت الرقم السري ؟
                                    </a>
                                    <a href="{{ route('register') }}"> لا تملك حساباً ؟ </a>
                                @endif
                            </div>
                            <div class="mt-3 d-flex justify-content-between w-100">
                                <button type="submit" id="btn" class="btn btn-success w-30">
                                    تسجيل الدخول
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
@endpush

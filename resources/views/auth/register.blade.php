@extends('Front.layouts.app')

@section('title', 'عمل حساب جديد')


@section('content')
    <div class="limiter">
        <div class="container mt-2 pt-3">

            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url({{ asset('front/images/bg-01.jpg') }})">
                    <h3 class="login100-form-title-1 text-center">
                        تسجيل دخول العميل
                    </h3>
                </div>
                {{-- Valdation Admin Error --}}
                @if (session()->has('error'))
                    <div class="alert alert-danger mt-2 text-center">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <form class="m-5 p-5" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group" data-validate="Name is required">
                        <span class="label-input100"> إسم المستخدم :</span>
                        <input class="input100 form-control w-50" type="text" name="name"
                            placeholder="أدخل إسم المستخدم">
                        <span class="focus-input100"></span>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group" data-validate="Email is required">
                        <span class="label-input100">البريد الإلكترونى :</span>
                        <input class="input100 form-control w-50" type="email" name="email"
                            placeholder="أدخل البريد الإلكتروني">
                        <span class="focus-input100"></span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group" data-validate="Password is required">
                        <span class="label-input100">الرقم السرى</span>
                        <input class="input100 form-control w-50" type="password" name="password"
                            placeholder="أدخل الرقم السرى">
                        <span class="focus-input100"></span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group" data-validate="Password is required">
                        <span class="label-input100">تأكيد الرقم السرى</span>
                        <input id="password-confirm" type="password" class="form-control w-50" name="password_confirmation"
                            required autocomplete="new-password" placeholder="أكد الرقم السرى">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn mt-3 d-flex justify-content-between w-50">
                        <button type="submit" class="p-4 btn btn-success w-10">
                            تأكيد عمل الحساب
                        </button>
                        <a href="{{ route('login') }}">لديك حساب بالفعل ؟ </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

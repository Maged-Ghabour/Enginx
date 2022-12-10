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
                <div class="container d-flex justify-content-center ">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 col-xxl-8 bg-light">
                        @if (session()->has('error'))
                            <div class="alert alert-danger mt-2 text-center">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <form class="m-5" action="{{ route('register.store') }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="form-group" data-validate="Name is required">
                                <span class="label-input100"> إسم المستخدم :</span>
                                <input id="name" class="input100 form-control w-100" type="text" name="name"
                                    placeholder="أدخل إسم المستخدم">
                                <span class="focus-input100" id="errname"></span>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group" data-validate="Email is required">
                                <span class="label-input100">البريد الإلكترونى :</span>
                                <input id="email" class="input100 form-control w-100" type="email" name="email"
                                    placeholder="أدخل البريد الإلكتروني">
                                <span class="focus-input100" id="erremail"></span>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group" data-validate="address is required">
                                <span class="label-input100">عنوانك الحالى :</span>
                                <input id="address" class="input100 form-control w-100" type="address" name="address"
                                    placeholder="أدخل عنوانك الحالى">
                                <span class="focus-input100" id="erraddress"></span>
                            </div>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group" data-validate="phone is required">
                                <span class="label-input100">رقم التليفون المحمول :</span>
                                <input id="phone" class="input100 form-control w-100" type="phone" name="phone"
                                    placeholder="أدخل رقم التليفون المحمول">
                                <span class="focus-input100" id="errphone"></span>
                            </div>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group" data-validate="image is required">
                                <span class="label-input100"> صورة شخصية:</span>
                                <input id="image" class="input100 form-control w-100" type="file" name="image">
                                <span class="focus-input100" id="errimage"></span>
                            </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group" data-validate="Password is required">
                                <span class="label-input100">الرقم السرى</span>
                                <input id="password" class="input100 form-control w-100" type="password" name="password"
                                    placeholder="أدخل الرقم السرى">
                                <span class="focus-input100" id="errpass"></span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group" data-validate="Password is required">
                                <span class="label-input100">تأكيد الرقم السرى</span>
                                <input id="password-confirm" type="password" class="form-control w-100"
                                    name="password_confirmation" autocomplete="new-password" placeholder="أكد الرقم السرى">
                                <span class="focus-input100" id="errcompass"></span>
                            </div>

                            <div class="container-login100-form-btn mt-3 d-flex justify-content-between w-100">
                                <button type="submit" id='btn' class=" btn btn-success w-30">
                                    تأكيد عمل الحساب
                                </button>
                                <a href="{{ route('login') }}">لديك حساب بالفعل ؟ </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //     document.getElementById("btn").addEventListener("click", validation);

        //     function validation() {

        //         var text = document.getElementById('name').value;
        //         var email = document.getElementById('email').value;
        //         var address = document.getElementById('address').value;
        //         var phone = document.getElementById('phone').value;
        //         var image = document.getElementById('image').value;
        //         var password = document.getElementById('password').value;
        //         var password_confirm = document.getElementById('password-confirm').value;
        //         console.log(validname(text));
        //         console.log(validemail(email));
        //         console.log(valiaddress(address));
        //         console.log(validphone(phone));
        //         console.log(validimage(image));
        //         console.log(validpassword(password));
        //         console.log(comfirmpassword(password, password_confirm));
        //     }

        //     function validname(text) {
        //         if ((!text.match(/[a-z]/)) || text == null || text == '') {
        //             var element = document.getElementById("errname");
        //             element.innerHTML = "Please Enter Your Name";
        //             element.classList.add("d-block");
        //             return true;
        //         } else {
        //             event.preventDefault();
        //             return false;
        //         }
        //     }

        //     function validemail(email) {
        //         if ((!email.match(/^[\w-\.]+@([\w - ]+\.)+[\w - ]{2,4}$/) || email == null || email == '')) {
        //             var element = document.getElementById("erremail");
        //             element.innerHTML = "Please Enter Your Email";
        //             element.classList.add("d-block");
        //             return true;
        //         } else {
        //             event.preventDefault();
        //             return false;
        //         }
        //     }

        //     function valiaddress(address) {
        //         if ((!address.match(/^[\u0621-\u064A\u0660-\u0669 ]+$/)) || address == null || address == '') {
        //             var element = document.getElementById("erraddress");
        //             element.innerHTML = "Please Enter Your Address";
        //             element.classList.add("d-block");
        //             return true;
        //         } else {
        //             event.preventDefault();
        //             return false;
        //         }
        //     }

        //     function validphone(phone) {
        //         if ((!phone.match(/^01[0125][0-9]{8}$/)) || phone == null || phone == '') {
        //             var element = document.getElementById("errphone");
        //             element.innerHTML = "Please Enter Your Phone";
        //             element.classList.add("d-block");
        //             return true;
        //         } else {
        //             event.preventDefault();
        //             return false;
        //         }
        //     }

        //     function validimage(image) {
        //         if ((!image.match(/[\/.](gif|jpg|jpeg|tiff|png)$/i)) || image == null || image == '') {
        //             var element = document.getElementById("errimage");
        //             element.innerHTML =
        //                 "Please Enter Your Image.jpg Or gif Or png Or tiff";
        //             element.classList.add("d-block");
        //             return true;

        //         } else {
        //             event.preventDefault();
        //             return false;
        //         }
        //     }

        //     function validpassword(password) {
        //         if ((!password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/)) || password == null || password ==
        //             '') {
        //             var element = document.getElementById("errpass");
        //             element.innerHTML = "Please Enter Your password";
        //             element.classList.add("d-block");
        //             return true;
        //         } else {
        //             event.preventDefault();
        //             return false;
        //         }
        //     }

        //     function comfirmpassword(password, password_confirm) {
        //         if (password !== password_confirm || password_confirm == null) {
        //             var element = document.getElementById("errcompass");
        //             element.innerHTML = "comfirm password must be equl password";
        //             element.classList.add("d-block");
        //             return true;

        //         } else {

        //             return false;
        //         }
        //     }
        //
    </script>

@endsection

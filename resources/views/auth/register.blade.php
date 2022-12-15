@extends('Front.layouts.app')

@section('title', 'عمل حساب جديد')


@section('content')

    <div class="account-login section ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">

                    <div class="register-form">
                        <div class="title text-center">
                            <h3> {{__('app.DontHaveAccount')}} {{__('app.registerNow')}}</h3>
                        </div>
                        @if (session()->has('error'))
                            <div class="alert alert-danger mt-2 text-center">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <form class="row" action="{{ route('register.store') }}" enctype="multipart/form-data"
                            method="POST" onsubmit="return false;">
                            @csrf
                            <div class="form-group" data-validate="Name is required">
                                <span class="label-input100"> {{__('app.yourName')}} :</span>
                                <input id="name" class=" form-control w-100" type="text" name="name"
                                    placeholder="{{__('app.enterName')}}">
                                <span class="" id="errname"></span>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group" data-validate="Email is required">
                                <span class="label-input100"> {{__('app.email')}} :</span>
                                <input id="email" class="input100 form-control w-100" type="email" name="email"
                                    placeholder="{{__('app.enterEmail')}}">
                                <span class="focus-input100" id="erremail"></span>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group" data-validate="address is required">
                                <span class="label-input100"> {{__('app.yourAddress')}} :</span>
                                <input id="address" class="input100 form-control w-100" type="address" name="address"
                                    placeholder="{{__('app.enterAddress')}}">
                                <span class="focus-input100" id="erraddress"></span>
                            </div>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group" data-validate="phone is required">
                                <span class="label-input100">{{__('app.yourPhone')}}</span>
                                <input id="phone" class="input100 form-control w-100" type="phone" name="phone"
                                    placeholder="{{__('app.enterPhone')}}">
                                <span class="focus-input100" id="errphone"></span>
                            </div>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group bg-white" data-validate="image is required">
                                <span class="label-input100">{{__('app.personalImage')}}</span>
                                <input id="image" class="form-control custom-file" type="file" name="image">
                                <span class="focus-input100" id="errimage"></span>
                            </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group" data-validate="Password is required">
                                <span class="label-input100">{{__('app.password')}}</span>
                                <input id="password" class="input100 form-control w-100" type="password" name="password"
                                    placeholder="{{__('app.enterPassword')}}">
                                <span class="focus-input100" id="errpass"></span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="form-group" data-validate="Password is required">
                                <span class="label-input100"> {{__('app.confirmPass')}} </span>
                                <input id="password-confirm" type="password" class="form-control w-100"
                                    name="password_confirmation" autocomplete="new-password" placeholder="{{__('app.password')}}">
                                <span class="focus-input100" id="errcompass"></span>
                            </div>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="container-login100-form-btn  d-flex justify-content-between ">
                                <button type="submit" id='btn' class=" btn btn-success w-100 p-3">
                                    {{__('app.register')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("btn").addEventListener("click", validation);

        function validation() {

            var text = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var address = document.getElementById('address').value;
            var phone = document.getElementById('phone').value;
            var image = document.getElementById('image').value;
            var password = document.getElementById('password').value;
            var password_confirm = document.getElementById('password-confirm').value;
            validname(text)
            validemail(email)
            valiaddress(address)
            validphone(phone)
            validimage(image)
            validpassword(password)
            comfirmpassword(password, password_confirm)
        }

        function validname(text) {
            if ((!text.match(/[a-z]/)) || text == null || text == '') {
                var element = document.getElementById("errname");
                element.innerHTML = "Please Enter Your Name";
                element.classList.add("d-block text-danger");
                return true;
            } else {
                var element = document.getElementById("errname");
                element.classList.add("d-none");
                return false;
            }
        }

        function validemail(email) {
            if ((!email.match(/^[\w-\.]+@([\w - ]+\.)+[\w - ]{2,4}$/) || email == null || email == '')) {
                var element = document.getElementById("erremail");
                element.innerHTML = "Please Enter Your Email";
                element.classList.add("d-block");
                return true;
            } else {
                var element = document.getElementById("erremail");
                element.classList.add("d-none");
                return false;
            }
        }

        function valiaddress(address) {
            if ((!address.match(/^[\u0621-\u064A\u0660-\u0669 ]+$/)) || address == null || address == '') {
                var element = document.getElementById("erraddress");
                element.innerHTML = "Please Enter Your Address";
                element.classList.add("d-block");
                return true;
            } else {
                var element = document.getElementById("erraddress");
                element.classList.add("d-none");
                return false;
            }
        }

        function validphone(phone) {
            if ((!phone.match(/^01[0125][0-9]{8}$/)) || phone == null || phone == '') {
                var element = document.getElementById("errphone");
                element.innerHTML = "Please Enter Your Phone";
                element.classList.add("d-block");
                return true;
            } else {
                var element = document.getElementById("errphone");
                element.classList.add("d-none");
                return false;
            }
        }

        function validimage(image) {
            if ((!image.match(/[\/.](gif|jpg|jpeg|tiff|png)$/i)) || image == null || image == '') {
                var element = document.getElementById("errimage");
                element.innerHTML =
                    "Please Enter Your Image.jpg Or gif Or png Or tiff";
                element.classList.add("d-block");
                return true;

            } else {
                var element = document.getElementById("errimage");
                element.classList.add("d-none");
                return false;
            }
        }

        function validpassword(password) {
            if ((!password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/)) || password == null || password ==
                '') {
                var element = document.getElementById("errpass");
                element.innerHTML = "Please Enter Your password";
                element.classList.add("d-block");
                return true;
            } else {
                var element = document.getElementById("errpass");
                element.classList.add("d-none");
                return false;
            }
        }

        function comfirmpassword(password, password_confirm) {
            if (password !== password_confirm || password_confirm == null) {
                var element = document.getElementById("errcompass");
                element.innerHTML = "comfirm password must be equl password";
                element.classList.add("d-block");
                return true;

            } else {
                var element = document.getElementById("errcompass");
                element.classList.add("d-none");
                return false;
            }
        }
        //
    </script>

@endsection

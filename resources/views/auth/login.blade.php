@extends('Front.layouts.app')

@section('title', 'تسجيل الدخول')

@section('content')




    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    @if (session()->has('error'))
                        <div class="alert alert-danger mt-2 text-center">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <form class="card login-form" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body">
                            <div class="title">
                                <h3 class="text-center">تسجيل الدخول الآن</h3>
                            </div>
                            <div class="form-group input-group" data-validate="Email is required">
                                <span class="reg-fn">البريد الإلكترونى :</span>
                                <input class="form-control" type="email" name="email"
                                    placeholder="أدلخ البريد الإلكترونى">
                                <span class="focus-input100" id="erremail"></span>
                            </div>
                            <div class="form-group input-group" data-validate="Password is required">
                                <span class="reg-fn">الرقم السرى</span>
                                <input class="form-control" type="password" name="password" placeholder="أدخل الرقم السرى"
                                    required>
                                <span class="focus-input100" id="errpass"></span>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between bottom-content">
                                <div class="form-check">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="form-check-input width-auto"
                                            name="remember">
                                        <label class="form-check-label">تذكرنى</label>
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="lost-pass" href="{{ route('password.request') }}">
                                        هل نسيت الرقم السري ؟
                                    </a>
                                @endif
                            </div>
                            <div class="w-100">
                                <button class="btn btn-success w-100 p-2" id="btn" type="submit">Login</button>
                            </div>
                            @if (Route::has('password.request'))
                                <p class="outer-link">ليس لديك حساب؟ <a href="{{ route('register') }}"> سجل الان </a>
                                </p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

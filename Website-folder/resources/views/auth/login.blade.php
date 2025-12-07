@extends('_master.auth')
{{--@extends('layouts.app')--}}
@section('extra__link')
<link rel="stylesheet" href="{{asset('/assets/vendors/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendors/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendors/slick/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendors/elagent-icon/style.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendors/themify-icon/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendors/animation/animate.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendors/font-awesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendors/swiper/swiper.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendors/icomoon/style.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
@endsection
@section('auth')
    <div class="body_wrapper rtl">
        <div class="login-area">
            <div class="bg-shapes">
                <img class="wow fadeIn" src="assets/img/login/heart-shape-01.png" alt="Image">
                <img class="wow fadeInLeft" src="assets/img/login/heart-shape-02.png" alt="Image">
                <img class="wow fadeInLeft" src="assets/img/login/heart-shape-03.png" alt="Image">
                <img class="wow " src="assets/img/login/heart-shape-04.png" alt="Image">
            </div>
            <div class="login-wrapper">
                <div class="login-left">
                    <a href="index.html" class="logo"><img src="assets/img/home-two/logo-dark.svg" alt="Image"></a>
                    <h2 class="title">صفحه ورود به حساب کاربری</h2>
                    <div class="sibtitle">به بازگشت خوش آمدید! روش را برای ورود انتخاب کنید:</div>

                    <div class="social-links">
                        <a href="#"><img src="assets/img/login/google-icon.svg" alt="Image"></a>
                        <a href="#"><img src="assets/img/login/fb-icon.svg" alt="Image"></a>
                        <a href="#"><img src="assets/img/login/apple-icon.png" alt="Image"></a>
                    </div>
                    <div class="divider"><span>یا</span></div>
                    <form action="{{ route('login.send') }}" method="post">
                        @csrf
                        <div class="input-field">
                            <input type="email" class="form-control"  @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ایمیل">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-field pass-field-with-icon">
                            <input type="password" class="form-control" @error('password') is-invalid @enderror name="password" required autocomplete="current-password" id="toggle_passowrd_field" placeholder="رمز">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <i data-toggleTarget="#toggle_passowrd_field" class="icon fas fa-eye toggle-password"></i>
                        </div>
                        <div class="d-flex justify-content-between input-field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    یادآوری
                                </label>
                            </div>
{{--                            <a href="#" class="forget-password">فراموشی رمز</a>--}}
                        </div>
                        <button type="submit" class="bj_theme_btn w-100 border-0">ورود</button>
{{--                        @if (Route::has('password.request'))--}}
{{--                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                            {{ __('Forgot Your Password?') }}--}}
{{--                        </a>--}}
{{--                        @endif--}}
                    </form>
                    <div class="new-user">
                    کاربری جدید&nbsp;<a href="{{route('register')}}">ساخت حساب کاربری</a>
                    </div>
                </div>
                <div class="login-right">
                    <img src="assets/img/login/login-img.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="assets/js/preloader.js"></script>
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/wow/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>


@endsection

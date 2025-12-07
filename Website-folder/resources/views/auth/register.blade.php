@extends('_master.auth')
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
<title>کتاب باز</title>
</head>

@section('auth')

    <div class="body_wrapper rtl">
        <div class="login-area registration-area">
            <div class="login-wrapper">
                <div class="login-left">
                    <a href="index.html" class="logo"><img src="assets/img/home-two/logo-dark.svg" alt="Image"></a>
                    <h2 class="title">در سایت ما ثبت نام کنید</h2>
                    <div class="sibtitle">فقط با چند مرحله حساب کاربری خود را ایجاد کنید</div>

                    <div class="social-links">
                        <a href="#"><img src="assets/img/login/google-icon.svg" alt="Image"></a>
                        <a href="#"><img src="assets/img/login/fb-icon.svg" alt="Image"></a>
                        <a href="#"><img src="assets/img/login/apple-icon.png" alt="Image"></a>
                    </div>
                    <div class="divider"><span>یا</span></div>
                    <form method="POST" action="{{ route('registerform') }}">
                        @csrf
                        <div class="input-field">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   value="{{ old('name') }}" placeholder="نام">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                            @enderror
                        </div>

                        <div class="input-field">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" name="email" value="{{ old('email') }}">


                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-field pass-field-with-icon">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="toggle_passowrd_field" placeholder="رمز">

                            <i data-toggleTarget="#toggle_passowrd_field" class="icon fas fa-eye toggle-password"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-field pass-field-with-icon">
                            <input type="password" name="password_confirmation" class="form-control"
                                   id="toggle_passowrd_field02" placeholder="تکرار رمز">
                            <i data-toggleTarget="#toggle_passowrd_field02" class="icon fas fa-eye toggle-password"></i>
                        </div>
                        <div class="d-flex justify-content-between input-field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    من با آن موافق بودم <a href="privacy-policy.html">سیاست حفظ حریم خصوصی</a>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="bj_theme_btn w-100 border-0">ثبتنام</button>
                    </form>
                    <div class="new-user">
                        از قبل حساب کاربری دارید؟&nbsp;<a href="{{route('login')}}">اینجا وارد شوید</a>
                    </div>
                </div>
                <div class="login-right">
                    <img class="mt-auto" src="assets/img/login/reginstration-img.png" alt="Image">
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

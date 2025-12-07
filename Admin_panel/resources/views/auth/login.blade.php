<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="admin, dashboard, ecommerce, panel"/>
    <meta name="description" content="Carrot - Admin.">
    <meta name="author" content="ashishmaraviya">

    <title>کرت - ادمین</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">

    <!-- Icon CSS -->
    <link href="assets/css/vendor/materialdesignicons.min.css" rel="stylesheet">
    <link href="assets/css/vendor/remixicon.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href='assets/css/vendor/datatables.bootstrap5.min.css' rel='stylesheet'>
    <link href='assets/css/vendor/responsive.datatables.min.css' rel='stylesheet'>
    <link href='assets/css/vendor/daterangepicker.css' rel='stylesheet'>
    <link href="assets/css/vendor/simplebar.css" rel="stylesheet">
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/vendor/apexcharts.css" rel="stylesheet">
    <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet">

    <!-- MainController CSS -->
    <link id="main-css" href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<main class="wrapper sb-default">
    <section class="auth-section anim">
        <div class="cr-login-page">
            <div class="container-fluid no-gutters">
                <div class="row">
                    <div class="offset-lg-6 col-lg-6">
                        <div class="content-detail">
                            <div class="main-info">
                                <div class="hero-container">
                                    <!-- Login form -->
                                    {{--
                                                                        <form class="login-form" method="post" action="{{route('login')}}">
                                                                            @csrf
                                                                            <div class="imgcontainer">
                                                                                <a href="index.blade.php"><img src="assets/img/logo/full-logo.png"
                                                                                                               alt="logo" class="logo"></a>
                                                                            </div>
                                                                            <div class="input-control">
                                                                                <input type="text" placeholder="نام کاربری را وارد کنید" name="userName"
                                                                                       class="form-control" @error('userName') is-invalid
                                                                                       @enderror  value="{{ old('userName') }}" required
                                                                                       autocomplete="email" autofocus>

                                                                                @error('userName')
                                                                                <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                                @enderror
                                                                                <span class="password-field-show">
                                                                                        <input type="password" placeholder="رمز عبور را وارد کنید"
                                                                                               name="password"
                                                                                               id="password"
                                                                                               class="form-control password-field @error('password') is-invalid @enderror"
                                                                                               required autocomplete="current-password">


                                                                                     @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror

                                                                                        <span data-toggle=".password-field"
                                                                                              class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                                                    </span>
                                                                                <label class="label-container" {{ __('Remember Me') }}>مرا به خاطر بسپار
                                                                                    <input type="checkbox" class="form-check-input"  name="remember" id="remember"
                                                                                        {{ old('remember') ? 'checked' : '' }}>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                                @if (Route::has('password.request'))
                                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                                    </a>
                                                                                @endif
                                                                                    <span class="psw"><a href="forgot.html" class="forgot-btn"> فراموشی کلمه عبور؟</a></span>
                                                                                <div class="login-btns">
                                                                                    <button type="submit">ورود</button>


                                                                                </div>
                                                                                <div class="division-lines">
                                                                                    <p>یا ورود به سیستم</p>
                                                                                </div>
                                                                                <div class="login-with-btns">
                                                                                    <button type="button" class="google">
                                                                                        <i class="ri-google-fill"></i>
                                                                                    </button>
                                                                                    <button type="button" class="facebook">
                                                                                        <i class="ri-facebook-fill"></i>
                                                                                    </button>
                                                                                    <button type="button" class="twitter">
                                                                                        <i class="ri-twitter-fill"></i>
                                                                                    </button>
                                                                                    <button type="button" class="linkedin">
                                                                                        <i class="ri-linkedin-fill"></i>
                                                                                    </button>
                                                                                    <span class="already-acc">عضو نیست؟ <a href="{{route('register')}}"
                                                                                                                           class="signup-btn">ثبت نام</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                    --}}

                                    <form class="login-form" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="input-control">
                                            <input type="text"
                                                   placeholder="نام کاربری را وارد کنید"
                                                   name="name"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   value="{{ old('name') }}"
                                                   required autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                                            @enderror

                                            <span class="password-field-show">
            <input type="password"
                   placeholder="رمز عبور را وارد کنید"
                   name="password"
                   class="form-control password-field @error('password') is-invalid @enderror"
                   required>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <span data-toggle=".password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </span>

                                            <label class="label-container">
                                                مرا به خاطر بسپار
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>

                                            <div class="login-btns">
                                                <button type="submit">ورود</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Vendor Custom -->
<script src="assets/js/vendor/jquery-3.6.4.min.js"></script>
<script src="assets/js/vendor/simplebar.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendor/apexcharts.min.js"></script>
<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<!-- Data Tables -->
<script src='assets/js/vendor/jquery.datatables.min.js'></script>
<script src='assets/js/vendor/datatables.bootstrap5.min.js'></script>
<script src='assets/js/vendor/datatables.responsive.min.js'></script>
<!-- Caleddar -->
<script src="assets/js/vendor/jquery.simple-calendar.js"></script>
<!-- Date Range Picker -->
<script src="assets/js/vendor/moment.min.js"></script>
<script src="assets/js/vendor/daterangepicker.js"></script>
<script src="assets/js/vendor/date-range.js"></script>

<!-- MainController Custom -->
<script src="assets/js/main.js"></script>
</body>

</html>

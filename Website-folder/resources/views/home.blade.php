@extends('_master.main')

@section('main')
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    @if (session('status'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ session('status') }}--}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    {{ __('You are logged in!') }}--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}


    <!-- Dashboard area -->
    <section class="bj_account_dashboard" data-bg-color="#f5f5f5">
        <div class="container rtl">
            <div class="row">
                <div class="col-lg-3">
                    <div class="account_dashboard_sidebar">
                        <div class="sidebar_widget_body d-flex account_dashboard_sidebar_profile">
                            <div class="">
                                <img
                                    src="{{ asset(optional($user->profile)->picture ?? 'images/default-profile.png') }}"
                                    alt="account">
                            </div>
                            <div class="">
                                <div class="greetings">درود</div>
                                <div class="name">{{$user->name}}</div>

                            </div>
                        </div>
                        <div class="sidebar_widget_body p-0">
                            <ul class="sidebar_widget_menu">
                                <li><a class="active" href="{{route('home')}}">پروفایل من</a></li>
                                <li><a href="{{route('show_cart')}}">سفارشات من</a></li>
                                <li><a href="{{route('show-favorite-list')}}">علاقه مندی های من</a></li>
                            </ul>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn-primary bj_theme_btn" type="submit">خروج</button>
                        </form>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="account_dashboard_body">
                        <div class="account_dashboard_content">
                            <div class="account_dashboard_content_header">
                                اطلاعات شخصی
                            </div>
                            <div class="content_body">
                                <form action="{{route('update')}}" method="post">
                                    @csrf
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <div class="row gy-4">
                                        <div class="col-12">
                                            <div class="profile-picture-form">
                                                <div class="preview"><img class="img-fluid"
                                                                          src="{{ old('picture', asset(optional($user->profile)->picture ?? 'images/default-profile.png')) }}"
                                                                          alt=""></div>
                                                <div class="upload_btn">
                                                    آپلود عکس جدید
                                                    <input type="file" id="profile-picture-file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group ">
                                                <input type="text" class="form-control" name="name"
                                                       value="{{old('name' , $user->name)}}" required>
                                                <label class="floating-label">نام</label>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group ">
                                                <input class="form-control" name="email" type="text" id="email_address"
                                                       value=" {{old('email' , $user->email)}}" required>
                                                <label class="floating-label" for="email_address">ایمیل آدرس</label>

                                            </div>
                                        </div>


                                    </div>


                                    <div class="account_dashboard_content_title mt-3">
                                        <h4>پسورد</h4>
                                    </div>
                                    <div class="row mt-1 gy-3">
                                        <div class="col-lg-6">
                                            <div class="form-group pass-field-with-icon">
                                                <input type="password" name="password" id="toggle_passowrd_field"
                                                       class="form-control" >
                                                <label class="floating-label">پسورد جدید</label>
                                                <i data-toggleTarget="#toggle_passowrd_field"
                                                   class="icon fas fa-eye toggle-password"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group pass-field-with-icon">
                                                <input type="password"  name="password_confirmation" id="toggle_passowrd_field2"
                                                       class="form-control" >
                                                <label class="floating-label">رمز عبور را تایید کنید</label>
                                                <i data-toggleTarget="#toggle_passowrd_field2"
                                                   class="icon fas fa-eye toggle-password"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="bj_theme_btn mt-3">ذخیره</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Dashboard area -->

@endsection

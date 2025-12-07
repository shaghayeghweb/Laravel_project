@extends('_master.main')
@section('main')

    <!-- main content -->
    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5> پروفایل کاربر</h5>
                    <ul>
                        <li><a href="index.blade.php">کرت</a></li>
                        <li> پروفایل کاربر</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-4 col-md-12">
                    <div class="vendor-sticky-bar">
                        <div class="col-xl-12">
                            <div class="cr-card">
                                <div class="cr-card-content">
                                    <div class="cr-vendor-block-img">
                                        <div class="cr-vendor-block-detail">
                                            <div class="profile-img">
                                                <img class="v-img" src="{{file_exists(public_path($userProfile['avatar']))
                 ? asset($userProfile['avatar'])
                 : asset('storage/' . $userProfile['avatar']) }}" alt="vendor image">
                                                <span class="tag-label online"></span>
                                            </div>
                                            <h5 class="name">{{$userProfile['name']}}</h5>
                                            <p>( {{$userProfile['email']}})</p>
                                            <div class="cr-settings">
                                                <a href="#" class="cr-btn-primary m-r-10">ویرایش پروفایل</a>
                                            </div>
                                        </div>
                                        <div class="cr-vendor-info">
                                            <ul>
                                                <li><span class="label">نام:</span>{{$userProfile['name']}}</li>
                                                <li><span class="label">شرکت:</span> کدینو</li>
                                                <li><span class="label">تلفن:</span>09900391233</li>
                                                <li><span class="label">محل:</span> تهران</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 col-md-12">

                    <div class="cr-card vendor-profile">
                        <div class="cr-card-content vendor-details mb-m-30">

                            <div class="row">

                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>آدرس ایمیل</h6>
                                        <ul>
                                            <li><strong>ایمیل :</strong>{{$userProfile['email']}}</li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>شماره تماس</h6>
                                        <ul>
                                            <li><strong>شماره تلفن :</strong>09123456789</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>نشانی</h6>
                                        <ul>
                                            <li> ایران تهران خیابان ولیعصر خیابان دمشق</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>رسانه های اجتماعی</h6>
                                        <ul>
                                            <li><strong><i class = "ri-linkedin-line"> </i></strong><a
                                                    href="#">https://in.linkedin.com/youraccount</a></li>
                                            <li><strong><i class = "ri-github-line"> </i></strong><a
                                                    href="#">https://github.com/youraccount</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

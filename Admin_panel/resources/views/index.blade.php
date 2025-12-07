@extends('_master.main')
@section('main')

    <!-- main content -->
    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5>نمایه فروشنده</h5>
                    <ul>
                        <li><a href="index.blade.php">کرت</a></li>
                        <li>نمایه فروشنده</li>
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
                                                <img class="v-img" src="assets/img/clients/3.jpg"
                                                     alt="vendor image">
                                                <span class="tag-label online"></span>
                                            </div>
                                            <h5 class="name">هارلی فارما</h5>
                                            <p>( example@support.com )</p>
                                            <div class="cr-settings">
                                                <a href="#" class="cr-btn-primary m-r-10">نمایه ویرایش</a>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical" title="وضعیت"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#"><span
                                                                    class="tag-label online"></span>آنلاین</a></li>
                                                        <li><a class="dropdown-item" href="#"><span
                                                                    class="tag-label offline"></span>آفلاین</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><span
                                                                    class="tag-label busy"></span>مشغول</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cr-vendor-info">
                                            <ul>
                                                <li><span class="label">نام:</span> ؛ الیزابت مورگوس</li>
                                                <li><span class="label">شرکت:</span> ؛ شرکت</li>
                                                <li><span class="label">سایت اینترنتی:</span> www.example.com</li>
                                                <li><span class="label">تلفن:</span> ؛ +1 546 4548 878787</li>
                                                <li><span class="label">محل:</span> استرالیا</li>
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
                                <div class="col-sm-12">
                                    <h3>جزئیات حساب</h3>
                                    <div class="cr-vendor-detail">
                                        <p>از حساب خود می توانید به راحتی سفارشات را مشاهده و ردیابی کنید.شما می توانید مدیریت کنید
                                            و اطلاعات حساب خود را مانند آدرس ، اطلاعات تماس تغییر دهید
                                            و تاریخ سفارشات.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>آدرس ایمیل</h6>
                                        <ul>
                                            <li><strong>ایمیل 1:</strong>support1@exapmle.com</li>
                                            <li><strong>ایمیل 2:</strong>support2@exapmle.com</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>شماره تماس</h6>
                                        <ul>
                                            <li><strong>شماره تلفن 1:</strong>(123) 123 456 7890</li>
                                            <li><strong>شماره تلفن 2:</strong>(123) 123 456 7890</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>نشانی</h6>
                                        <ul>
                                            <li> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                کوتا سان خوزه ، کالیفرنیا - .</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>آدرس 2</h6>
                                        <ul>
                                            <li> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                کوتا سان خوزه ، کالیفرنیا - .</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>حساب های بانکی</h6>
                                        <ul>
                                            <li><strong>نام کاربری :</strong>ویلی ویتز</li>
                                            <li><strong>شماره حساب :</strong>123**********80</li>
                                            <li><strong>کد :</strong>123**********80</li>
                                            <li><strong>نام بانک :</strong>Barky Central Bank</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>رسانه های اجتماعی</h6>
                                        <ul>
                                            <li><strong><i class = "ri-facebook-line"> </i></strong><a
                                                    href="#">https://www.facebook.com/youraccount</a></li>
                                            <li><strong><i class = "ri-twitter-line"> </i></strong><a
                                                    href="#">https://twitter.com/youraccount</a></li>
                                            <li><strong><i class = "ri-linkedin-line"> </i></strong><a
                                                    href="#">https://in.linkedin.com/youraccount</a></li>
                                            <li><strong><i class = "ri-github-line"> </i></strong><a
                                                    href="#">https://github.com/youraccount</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>پرداخت</h6>
                                        <ul>
                                            <li><strong>پی پال:</strong>support1@exapmle.com</li>
                                            <li><strong>پاییونیر:</strong>support2@exapmle.com</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>اطلاعات مالیاتی</h6>
                                        <ul>
                                            <li><strong> کد:</strong>SDF5***********5F</li>
                                            <li><strong>شماره شناسه مالیاتی:</strong>6582***********523</li>
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

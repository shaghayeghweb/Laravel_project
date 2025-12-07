@extends('_master.main')
@section('main')

    <div class="body_wrapper">

        {{--        <div class="toast-container position-fixed p-3">--}}
        {{--            <div id="cartToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">--}}
        {{--                <div class="toast-header">--}}
        {{--                    <strong class="me-auto">اضافه به سبدخرید</strong>--}}
        {{--                    <small>همین الان</small>--}}
        {{--                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>--}}
        {{--                </div>--}}
        {{--                <div class="toast-body">--}}
        {{--                    کالا به سبد خرید اضافه شد!--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}


        <!-- breadcrumb area  -->
        <section class="bj_breadcrumb_area text-center banner_animation_03" data-bg-color="#f5f5f5">
            <div class="bg_one" data-bg-image="assets/img/breadcrumb/breadcrumb_banner_bg.png"></div>
            <div class="bd_shape one wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img
                    data-parallax='{"y": -50}' src="assets/img/breadcrumb/book_left1.png" alt="">
            </div>
            <div class="bd_shape two wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                    data-parallax='{"y": 30}' src="assets/img/breadcrumb/book-left2.png" alt="">
            </div>
            <div class="bd_shape three wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img
                    data-parallax='{"y": -50}' src="assets/img/breadcrumb/plane-1.png" alt="">
            </div>
            <div class="bd_shape four wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                    data-parallax='{"y": 30}' src="assets/img/breadcrumb/plan-3.png" alt="">
            </div>
            <div class="bd_shape five wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                    data-parallax='{"y": 80}' src="assets/img/breadcrumb/plan-2.png" alt="">
            </div>
            <div class="bd_shape six wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img
                    data-parallax='{"y": -60}' src="assets/img/breadcrumb/book-right.png" alt="">
            </div>
            <div class="bd_shape seven wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                    data-parallax='{"x": 50}' src="assets/img/breadcrumb/book-right2.png" alt="">
            </div>
            <div class="container">
{{--                @dd($staticPages)--}}
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s"> {{$staticPages['title']}}</h2>
                <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                    <li><a href="index.html">خانه</a></li>
                    <li class="active">درباره</li>
                </ol>
            </div>
        </section>
        <!-- breadcrumb area  -->
        <!-- mission area  -->
        <section class="bj_mission_area sec_padding" data-bg-color="#f5f5f5">
            <div class="container rtl">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="bj_video_inner wow fadeInLeft" data-wow-delay="0.2s">
                            <img class="img-fluid" src="assets/img/about_img.png" alt="">
                            <a class="play-btn" href="https://www.youtube.com/embed/nyxxI6J0MrE" data-fancybox=""><i
                                    class="arrow_triangle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bj_mission_content pe-5 wow fadeInRight" data-wow-delay="0.3s">
                            <h2 class="title"> {{$staticPages['secondTitle']}}</h2>

                            <p>
                                {{$staticPages['description']}}
                               </p>
                        </div>
                    </div>
                </div>
                <div class="row features_box">
                    <div class="col-lg-4 col-md-6">
                        <div class="bj_features_item text-center wow fadeInUp" data-wow-delay="0.2s">
                            <i class="icon-gift icon"></i>
                            <h3>{{$staticPages['fetureTilteOne']}}</h3>
                            <p>{{$staticPages['fetureDescriptionOne']}}</p>
                            <a href="#" class="bj_theme_btn text_btn">خواندن بیشتر <i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="bj_features_item text-center wow fadeInUp" data-wow-delay="0.3s">
                            <i class="icon-feather-pen icon"></i>
                            <h3>{{$staticPages['fetureTitleTow']}}</h3>
                            <p>
                                {{$staticPages['fetureDescriptionTwo']}}
                            </p>
                            <a href="#" class="bj_theme_btn text_btn">خواندن بیشتر <i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="bj_features_item text-center wow fadeInUp" data-wow-delay="0.4s">
                            <i class="icon-open-book1 icon"></i>
                            <h3>{{$staticPages['fetureTitleThree']}}</h3>
                            <p>
                                {{$staticPages['fetureDescriptionTree']}}
                               </p>
                            <a href="#" class="bj_theme_btn text_btn">خواندن بیشتر <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- mission area  -->
        <!-- bj author area  -->
        <section class="bj_author_area sec_padding rtl">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <h2 class="title wow fadeInLeft" data-wow-delay="0.2s">محبوب ترین نویسندگان</h2>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="author.html" class="bj_theme_btn strock_btn ms-0 wow fadeInRight"
                           data-wow-delay="0.3s">مشاهده همه</a>
                    </div>
                </div>
                <div class="row">
                    @foreach($_favAuthors as $_favAuthor)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="bj_team_item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team_img">
                                <img src="{{asset($_favAuthor->image)}}" alt="">
                                <div class="social_icon rtl">
                                    <a href="#"><i class="social_facebook"></i></a>
                                    <a href="#"><i class="social_twitter"></i></a>
                                    <a href="#"><i class="social_googleplus"></i></a>
                                </div>
                            </div>
                            <a href="{{ route('author-single', ['slug' => $_favAuthor->slug]) }}">
                                <h5>{{$_favAuthor->name}}</h5>
                            </a>
                            <span class="name">نویسنده</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- bj author area  -->
        <!-- bj testimonial three area  -->
        <section class="bj_testimonial_area_three sec_padding" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="row mb-5 rtl">
                    <div class="col-lg-5">
                        <h2 class="title wow fadeInLeft">{{$staticPages['theirdTitle']}}</h2>
                    </div>
                    <div class="col-lg-5 offset-lg-2 wow fadeInRight">
                        <p>
                            {{$staticPages['theirdDescription']}}
                        </p>
                    </div>
                </div>
                <div class="testimonial_slider_three wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-widget">
                        <div class="widget-title">

                            <div class="author-img">
                                <img src="assets/img/home-four/author1.jpg" alt="">
                            </div>
                            <div class="auth-rating">
                                <div class="auth-info">
                                    <h6>فرهاد نادری</h6>
                                    <span>کارآفرین</span>
                                </div>
                                <div class="rating">
                                    <span>4.9</span><i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <i class="icon-quote"></i>
                            <p>ما با خشم عادلانه و از مردانی که بسیار فریب خورده‌اند بیزاریم
                                جذابیت های لذت لحظه.</p>
                            <div class="post-date">
                                <img src="assets/img/home-four/calender.png" alt="">شنبه 13 مهر 1403
                            </div>
                        </div>
                    </div>
                    <div class="single-widget">
                        <div class="widget-title">
                            <div class="author-img">
                                <img src="assets/img/home-four/author1.jpg" alt="">
                            </div>
                            <div class="auth-rating">
                                <div class="auth-info">
                                    <h6>مازیار فلاحی</h6>
                                    <span>خواننده</span>
                                </div>
                                <div class="rating">
                                    <span>5</span><i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <i class="icon-quote"></i>
                            <p>ما با خشم عادلانه و از مردانی که بسیار فریب خورده‌اند بیزاریم
                                جذابیت های لذت لحظه.</p>
                            <div class="post-date">
                                <img src="assets/img/home-four/calender.png" alt="">شنبه 13 مهر 1403
                            </div>
                        </div>
                    </div>
                    <div class="single-widget">
                        <div class="widget-title">
                            <div class="author-img">
                                <img src="assets/img/home-four/author1.jpg" alt="">
                            </div>
                            <div class="auth-rating">
                                <div class="auth-info">
                                    <h6>نیما مرادی</h6>
                                    <span>فروشنده</span>
                                </div>
                                <div class="rating">
                                    <span>4.9</span><i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <i class="icon-quote"></i>
                            <p>ما با خشم عادلانه و از مردانی که بسیار فریب خورده‌اند بیزاریم
                                جذابیت های لذت لحظه.</p>
                            <div class="post-date">
                                <img src="assets/img/home-four/calender.png" alt="">شنبه 13 مهر 1403
                            </div>
                        </div>
                    </div>
                    <div class="single-widget">
                        <div class="widget-title">
                            <div class="author-img">
                                <img src="assets/img/home-four/author1.jpg" alt="">
                            </div>
                            <div class="auth-rating">
                                <div class="auth-info">
                                    <h6>امین فرهادی</h6>
                                    <span>کارافرین</span>
                                </div>
                                <div class="rating">
                                    <span>4.9</span><i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <i class="icon-quote"></i>
                            <p>ما با خشم عادلانه و از مردانی که بسیار فریب خورده‌اند بیزاریم
                                جذابیت های لذت لحظه.</p>
                            <div class="post-date">
                                <img src="assets/img/home-four/calender.png" alt="">شنبه 13 مهر 1403
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bj_clients_logo">
                    <div class="bj_clients_title">
                        <h3>توسط تیم ما معرفی شده</h3>
                    </div>
                    <div class="clients_logo_inner">
                        <a href="#" class="clients_logo_item wow fadeInUp" data-wow-delay="0.2s"><img
                                src="assets/img/home-three/banner/clients-logo1.png" alt=""></a>
                        <a href="#" class="clients_logo_item wow fadeInUp" data-wow-delay="0.3s"><img
                                src="assets/img/home-three/banner/clients-logo2.png" alt=""></a>
                        <a href="#" class="clients_logo_item wow fadeInUp" data-wow-delay="0.4s"><img
                                src="assets/img/home-three/banner/clients-logo3.png" alt=""></a>
                        <a href="#" class="clients_logo_item wow fadeInUp" data-wow-delay="0.5s"><img
                                src="assets/img/home-three/banner/clients-logo4.png" alt=""></a>
                        <a href="#" class="clients_logo_item wow fadeInUp" data-wow-delay="0.6s"><img
                                src="assets/img/home-three/banner/clients-logo5.png" alt=""></a>
                        <a href="#" class="clients_logo_item wow fadeInUp" data-wow-delay="0.7s"><img
                                src="assets/img/home-three/banner/clients-logo6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

    </div>


@endsection


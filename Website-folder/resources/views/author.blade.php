@extends('_master.main')
@section('main')
    <!-- breadcrumb area  -->
    <section class="bj_breadcrumb_area text-center banner_animation_03" data-bg-color="#f5f5f5">
        <div class="bg_one" data-bg-image="/assets/img/breadcrumb/breadcrumb_banner_bg.png"></div>
        <div class="bd_shape one wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img
                data-parallax='{"y": -50}' src="/assets/img/breadcrumb/book_left1.png" alt="">
        </div>
        <div class="bd_shape two wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                data-parallax='{"y": 30}' src="/assets/img/breadcrumb/book-left2.png" alt="">
        </div>
        <div class="bd_shape three wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img
                data-parallax='{"y": -50}' src="/assets/img/breadcrumb/plane-1.png" alt="">
        </div>
        <div class="bd_shape four wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                data-parallax='{"y": 30}' src="/assets/img/breadcrumb/plan-3.png" alt="">
        </div>
        <div class="bd_shape five wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                data-parallax='{"y": 80}' src="/assets/img/breadcrumb/plan-2.png" alt="">
        </div>
        <div class="bd_shape six wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img
                data-parallax='{"y": -60}' src="/assets/img/breadcrumb/book-right.png" alt="">
        </div>
        <div class="bd_shape seven wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                data-parallax='{"x": 50}' src="/assets/img/breadcrumb/book-right2.png" alt="">
        </div>
        <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay="0.2s">نویسندگان</h2>
            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="index.html">خانه</a></li>
                <li class="active">نویسندگان</li>
            </ol>
        </div>
    </section>
    <!-- breadcrumb area  -->
    <!-- bj author area  -->
    <section class="bj_author_area sec_padding" data-bg-color="#f5f5f5">
        <div class="container rtl">
            <div class="row">
                <div class="col-lg-3">
                    <div class="author_sidebar">
                        <div class="widget search_widget">
                            <h2 class="widget_title">جستجو</h2>
                            <form action="#" class="search_form">
                                <input type="text" placeholder="جستجو کتاب.." class="form-control">
                                <button type="submit" class="search_btn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <div class="widget filter_widget">
                            <h2 class="widget_title">دسته بندی</h2>
                            <ul class="list-unstyled">
                                <li class="active"><a href="#">همه</a></li>
                                <li><a href="#">الف</a></li>
                                <li><a href="#">ب</a></li>
                                <li><a href="#">پ</a></li>
                                <li><a href="#">ت</a></li>
                                <li><a href="#">ث</a></li>
                                <li><a href="#">ج</a></li>
                                <li><a href="#">چ</a></li>
                                <li><a href="#">ح</a></li>
                                <li><a href="#">خ</a></li>
                            </ul>
                        </div>
                        <div class="widget category_widget">
                            <h2 class="widget_title"> دسته بندی</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">بیوگرافی</a></li>
                                <li><a href="#">کتاب‌های آشپزی</a></li>
                                <li><a href="#">درام</a></li>
                                <li><a href="#">برای کودک</a></li>
                                <li><a href="#">عاشقانه</a></li>
                                <li><a href="#">دسته‌بندی نشده</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row gy-4">
                        @foreach($authors as $author)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="bj_team_item">
                                <div class="team_img">
                                    <img src="{{$author->image}}" alt="">
                                    <div class="social_icon">
                                        <a href="#"><i class="social_facebook"></i></a>
                                        <a href="#"><i class="social_twitter"></i></a>
                                        <a href="#"><i class="social_googleplus"></i></a>
                                    </div>
                                </div>
                                <a href="{{route('author-single' , ['slug'=>$author['slug']])}}">
                                    <h5>{{$author->name}}</h5>
                                </a>
                                <span class="name">نویسنده</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center">
                <nav aria-label="...">
                    <ul class="pagination pagi-content">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="ti-angle-left"></i>قبلی</a>
                        </li>
                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">بعدی<i class="ti-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- bj author area  -->
@endsection


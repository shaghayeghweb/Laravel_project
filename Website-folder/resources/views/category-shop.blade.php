


    <!-- breadcrumb area  -->
@extends('_master.main')
@section('main')

    <section class="bj_breadcrumb_area text-center banner_animation_03" data-bg-color="#f5f5f5">
        <div class="bg_one" data-bg-image="/assets/img/breadcrumb/breadcrumb_banner_bg.png"></div>
        <div class="bd_shape one wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -50}' src="/assets/img/breadcrumb/book_left1.png" alt="">
        </div>
        <div class="bd_shape two wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 30}' src="/assets/img/breadcrumb/book-left2.png" alt="">
        </div>
        <div class="bd_shape three wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -50}' src="/assets/img/breadcrumb/plane-1.png" alt="">
        </div>
        <div class="bd_shape four wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 30}' src="/assets/img/breadcrumb/plan-3.png" alt="">
        </div>
        <div class="bd_shape five wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 80}' src="/assets/img/breadcrumb/plan-2.png" alt="">
        </div>
        <div class="bd_shape six wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -60}' src="/assets/img/breadcrumb/book-right.png" alt="">
        </div>
        <div class="bd_shape seven wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"x": 50}' src="/assets/img/breadcrumb/book-right2.png" alt="">
        </div>
        <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay="0.2s">فروشگاه</h2>
            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="index.html">خانه</a></li>
                <li class="active">فروشگاه</li>
            </ol>
        </div>
    </section>
    <!-- breadcrumb area  -->

    <!-- shop area  -->
    <section class="bj_shop_area sec_padding" data-bg-color="#f5f5f5">
        <div class="container rtl">
            <div class="row">
                <div class="col-lg-12">
                    <form role="search" method="get" class="pr_search_form pr_search_form_two input-group" action="#">
                        <input type="text" name="s" value="" class="form-control search-field" id="search" placeholder="کتاب مورد علاقه خودرا جستجوکنید...">
                        <div class="search-fileter">
                            <div class="form-check form-check-inline mr-30">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="title" value="option1">
                                <label class="form-check-label" for="title">تیتر</label>
                            </div>
                            <div class="form-check form-check-inline mr-30">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="writer" value="option2">
                                <label class="form-check-label" for="writer">نویسنده</label>
                            </div>
                            <div class="form-check form-check-inline mr-30">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="category" value="option2">
                                <label class="form-check-label" for="category">دسته بندی</label>
                            </div>
                        </div>
                        <button type="submit"><i class="ti-search"></i></button>
                    </form>
                    <div class="shop_top d-flex align-items-center justify-content-between">
                        <div class="shop_menu_left">500 کتاب</div>
                        <div class="shop_menu_right d-flex align-items-center justify-content-end">
                            <div class="filter_widget pb-0 me-3">
                                <h3 class="shop_sidebar_title mb-0"><a href="#"><img src="assets/img/shop/filter.svg" alt=""></a>فیلتر</h3>
                            </div>
                            دسته بندی براساس
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby selectpickers">
                                    <option value="menu_order" selected='selected'>دسته بندی</option>
                                    <option value="popularity">دسته بندی براساس محبوبیت</option>
                                    <option value="rating">دسته بندی براساس امتیاز</option>
                                    <option value="date">دسته بندی براساس اخرین</option>
                                    <option value="price">مرتب سازی بر اساس قیمت: کم به زیاد</option>
                                    <option value="price-desc">مرتب سازی بر اساس قیمت: زیاد به پایین</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $productItem)
                        <div class="col-lg-3 col-sm-6 projects_item">
                            <div class="best_product_item best_product_item_two shop_product">
                                <div class="img">
                                    <a href="#"><img src="{{asset($productItem->img_thumbnail)}}" alt="book"></a>
                                    <div class="pr_ribbon">
                                        <span class="product-badge">جدید</span>
                                        <div class="ratting">
                                            <img src="/assets/img/star-1.png" alt=""> {{$productItem->rating}}
                                        </div>
                                    </div>
                                    <div class="hover_item">
                                        <a class="quick_button" href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="right" title="علاقه مندی"><i class="icon_heart_alt"></i></a>
                                        <span data-bs-toggle="tooltip" data-bs-placement="right" title="مشاهده سریع"><button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button></span>
                                        <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="مقایسه"><i class="ti-control-shuffle"></i></a>
                                    </div>
                                    <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="کتاب کار داستان سرایی" data-img="assets/img/author_book1.jpg" data-price="25" data-mrp="120">
                                        <i class="icon_cart_alt"></i>سبد خرید اضافه شود
                                    </button>
                                </div>
                                <div class="bj_new_pr_content">
                                    <a href="{{route('product' , ['slug' => ($productItem['slug'])])}}">
                                        <h4 class="bj_new_pr_title">{{$productItem->title}}</h4>
                                    </a>
                                    <div class="bj_pr_meta d-flex">
                                        <div class="book_price"><del>{{$productItem->oldPrice}} </del>{{$productItem->price}}</div>
                                    </div>
                                </div>
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
    <!-- shop area  -->
@endsection()



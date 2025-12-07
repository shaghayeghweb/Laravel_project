@extends('_master.main');
@section('main')

<section class="bj_breadcrumb_area text-center banner_animation_03" data-bg-color="#f5f5f5">
    <div class="bg_one" data-bg-image="assets/img/breadcrumb/breadcrumb_banner_bg.png"></div>
    <div class="bd_shape one wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -50}' src="assets/img/breadcrumb/book_left1.png" alt="">
    </div>
    <div class="bd_shape two wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 30}' src="assets/img/breadcrumb/book-left2.png" alt="">
    </div>
    <div class="bd_shape three wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -50}' src="assets/img/breadcrumb/plane-1.png" alt="">
    </div>
    <div class="bd_shape four wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 30}' src="assets/img/breadcrumb/plan-3.png" alt="">
    </div>
    <div class="bd_shape five wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"y": 80}' src="assets/img/breadcrumb/plan-2.png" alt="">
    </div>
    <div class="bd_shape six wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img data-parallax='{"y": -60}' src="assets/img/breadcrumb/book-right.png" alt="">
    </div>
    <div class="bd_shape seven wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img data-parallax='{"x": 50}' src="assets/img/breadcrumb/book-right2.png" alt="">
    </div>
    <div class="container">
        <h2 class="title wow fadeInUp" data-wow-delay="0.2s">فروشگاه کتاب</h2>
        <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.3s">
            <li><a href="indexxx.blade.php">خانه</a></li>
            <li class="active">نوار کناری فروشگاه</li>
        </ol>
    </div>
</section>


@if($searchProduct->isEmpty())
    <p>no result</p>
@else
    <div class="row justify-content-start" dir="rtl">
        @foreach($searchProduct as $result)
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                <div class="best_product_item best_product_item_two shop_product" style="padding: 30px">
                    <div class="img">
                        <a href="{{ route('product', ['slug' => $result['slug']]) }}">
                            <img src="{{ asset($result['img_thumbnail']) }}" alt="book">
                        </a>
                        <div class="pr_ribbon">
                            <span class="product-badge">جدید</span>
                            <div class="ratting">
                                <img src="assets/img/star-1.png" alt="">{{ $result['rating'] }}
                            </div>
                        </div>
                        <div class="hover_item">
                            <a class="quick_button" href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="right" title="علاقه مندی"><i class="icon_heart_alt"></i></a>
                            <span data-bs-toggle="tooltip" data-bs-placement="right" title="مشاهده سریع">
                                <button class="quick_button" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="arrow_move"></i></button>
                            </span>
                            <a class="quick_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="مقایسه"><i class="ti-control-shuffle"></i></a>
                        </div>
                        <button type="button" class="bj_theme_btn add-to-cart-automated" data-name="کتاب کار داستان سرایی" data-img="assets/img/author_book1.jpg" data-price="25" data-mrp="120">
                            <i class="icon_cart_alt"></i>سبد خرید اضافه شود
                        </button>
                    </div>
                    <div class="bj_new_pr_content">
                        <a href="{{ route('product', ['slug' => $result['slug']]) }}">
                            <h4 class="bj_new_pr_title">{{ \Illuminate\Support\Str::limit($result['title'], 45) }}</h4>
                        </a>
                        <div class="bj_pr_meta d-flex">
                            <div class="book_price"><del>{{ $result['oldPrice'] }}</del>{{ $result['price'] }} تومان</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

@endsection

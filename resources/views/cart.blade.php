@extends('_master.main')
@section('main')
        <section class="bj_cart_area" data-bg-color="#f5f5f5">
            <div class="container rtl">
                <div class="row gy-lg-0 gy-3">
                    <div class="col-lg-8">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                            <div class="bj_cart_content_header">
                                <div class="form-check cart_total_select">
                                    <input class="form-check-input" type="checkbox" value="" id="cart_total_select_check" checked>
                                    <label class="form-check-label" for="cart_total_select_check">
                                        انتخاب همه (4 آیتم ها)
                                    </label>
                                </div>
                                <div>
                                    <span>مبلغ</span>, جمع انتخاب شما: <span class="cart_total_mrp">  تومان</span> <span class="cart_total_price"> تومان</span>
                                </div>
                            </div>
                        @if(!empty($cart))

                                    @foreach($cart as $id => $cartItem)



                        <div class="cart_item_wrapper">
                            <div class="single_cart_item">
                                <div class="cart_item_select">
                                    <input class="form-check-input" type="checkbox" checked>
                                </div>
                                <div class="cart_item_image">
                                    <img src="{{asset($cartItem['img_thumbnail'])}}" alt="cart">
                                </div>
                                <div class="cart_item_content">
                                    <a href="product-single.html" class="book_name">{{$cartItem['title']}}</a>
                                    <div class="author_name"> </div>
                                    <div class="cart_action">
                                        <button class="cart_remove"><i class="ti-trash"></i></button>
                                    </div>
{{--                                    <div class="book_available">فقط {{$cartItem['quantity']}} نسخه موجود است</div>--}}
                                </div>
                                <div class="cart_quantity">
{{--                                    <button class="quantity_btn minus"><i class="icon_minus-06"></i></button>--}}
{{--                                    <input type="number" min="1" max="99" step="1" value="1">--}}
{{--                                    <button class="quantity_btn plus"><i class="icon_plus"></i></button>--}}
                                </div>


                                <div class="cart_item_price">
                                    <div class="cart_item_price_discount">{{$cartItem['price']}} تومان</div>
                                    <div class="cart_item_price_mrp"> {{$cartItem['oldPrice']}} تومان</div>
                                </div>

                            </div>
                        </div>

                                    @endforeach
                                    @else
                                        <p>سبد خالی است</p>
                                    @endif
                        <div class="cart-happy-return-parent mb-0">
                            <div class="cart-happy-return">
                                <img src="assets/img/cart/happy-return-new.webp" alt="">
                                <p>7 روز بازگشت مبارک</p>
                            </div>
                            <div class="cart-happy-return">
                                <img src="assets/img/cart/earn-points.svg" alt="">
                                <p>خرید و کسب امتیاز</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="bj_checkout_sidebar">
                            <div class="cart_checkout_summary">
                                <div class="cart_checkout_header">
                                    <h5>خلاصه پرداخت</h5>
                                </div>
                                <div class="cart_checkout_body">
                                    <div class="checkout_item">
                                        <span>جمع فرعی</span>
                                        <span>1,243 میلیون تومان</span>
                                    </div>
                                    <div class="checkout_item">
                                        <span>ارسال <button type="button" class="tooltip-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="راهنمای بابت ارسال">
                                                <i class="icon_info_alt"></i>
                                            </button></span>
                                        <span>57 میلیون تومان</span>
                                    </div>
                                    <div class="checkout_item">
                                        <span>جمع</span>
                                        <span>777 میلیون تومان</span>
                                    </div>
                                    <div class="checkout_item strong">
                                        <span>جمع پرداختی</span>
                                        <span>1,243 میلیون تومان</span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart_proceed_checkout mt-3">
                                <a href="checkout-gift.html" class="bj_theme_btn strock_btn w-100 ">سفارش به عنوان هدیه</a>

                                <a href="checkout-login.html" class="bj_theme_btn w-100 border-0 mt-2">به تسویه حساب بروید <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart area  -->

        <!-- best selling product area  -->
        <section class="best_selling_pr_area sec_padding" data-bg-color="#f5f5f5">
            <div class="container">
                <div class="section_title  text-start wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class=" title_two">محصولات محبوبی که ممکن است دوست داشته باشید</h3>
                    <p>خواندن کتاب به شما کمک می کند تا مهارت های ارتباطی خود را توسعه دهید</p>
                </div>

                <div class="best_slider">
                    <div class="item">
                        <div class="bj_new_pr_item rtl">
                            <a href="product-single.html" class="img">

                                <img src="assets/img/home/choice-4.png" alt="book">

                            </a>
                            <a class="wish_btn" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="top" title="علاقه مندی"><i class="icon_heart_alt"></i></a>
                            <div class="bj_new_pr_content_two">
                                <div class="d-flex justify-content-between">
                                    <a href="product-single.html">
                                        <h4 class="bj_new_pr_title">پژواک های ابدیت</h4>
                                    </a>
                                    <div class="book_price"><sup>250</sup> <sup>تومان</sup></div>
                                </div>
                                <div class="writer_name rtl"><i class="icon-user"></i> <a href="author-single.html">اشکان موسوی</a></div>
                                <div class="ratting">
                                    <div class="ratting_icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>(252)</span>
                                </div>
                                <a href="checkout.html" class="bj_theme_btn">اکنون بخرید</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bj_new_pr_item rtl">
                            <a href="product-single.html" class="img">

                                <img src="assets/img/home/choice-2.png" alt="book">

                            </a>
                            <a class="wish_btn" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="top" title="علاقه مندی"><i class="icon_heart_alt"></i></a>
                            <div class="bj_new_pr_content_two">
                                <div class="d-flex justify-content-between">
                                    <a href="product-single.html">
                                        <h4 class="bj_new_pr_title">خیانت</h4>
                                    </a>
                                    <div class="book_price"><sup>250</sup> <sup>تومان</sup></div>
                                </div>
                                <div class="writer_name"><i class="icon-user"></i> <a href="author-single.html">اشکان موسوی</a></div>
                                <div class="ratting">
                                    <div class="ratting_icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>(252)</span>
                                </div>
                                <a href="checkout.html" class="bj_theme_btn">اکنون بخرید</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bj_new_pr_item rtl">
                            <a href="product-single.html" class="img">
                                <img src="assets/img/home/choice-3.png" alt="book">
                            </a>
                            <a class="wish_btn" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="top" title="علاقه مندی"><i class="icon_heart_alt"></i></a>
                            <div class="bj_new_pr_content_two">
                                <div class="d-flex justify-content-between">
                                    <a href="product-single.html">
                                        <h4 class="bj_new_pr_title">نگهداری از کودک</h4>
                                    </a>
                                    <div class="book_price"><sup>250</sup> <sup>تومان</sup></div>
                                </div>
                                <div class="writer_name"><i class="icon-user"></i> <a href="author-single.html">اشکان موسوی</a></div>
                                <div class="ratting">
                                    <div class="ratting_icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>(252)</span>
                                </div>
                                <a href="checkout.html" class="bj_theme_btn">اکنون بخرید</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bj_new_pr_item rtl">
                            <a href="product-single.html" class="img">
                                <img src="assets/img/home/choice-1.png" alt="book">
                            </a>
                            <a class="wish_btn" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="top" title="علاقه مندی"><i class="icon_heart_alt"></i></a>
                            <div class="bj_new_pr_content_two">
                                <div class="d-flex justify-content-between">
                                    <a href="product-single.html">
                                        <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                    </a>
                                    <div class="book_price"><sup>250</sup> <sup>تومان</sup></div>
                                </div>
                                <div class="writer_name"><i class="icon-user"></i> <a href="author-single.html">اشکان موسوی</a></div>
                                <div class="ratting">
                                    <div class="ratting_icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>(252)</span>
                                </div>
                                <a href="checkout.html" class="bj_theme_btn">اکنون بخرید</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bj_new_pr_item rtl">
                            <a href="product-single.html" class="img">
                                <img src="assets/img/home/choice-2.png" alt="book">
                            </a>
                            <a class="wish_btn" href="my-wishlist.html" data-bs-toggle="tooltip" data-bs-placement="top" title="علاقه مندی"><i class="icon_heart_alt"></i></a>
                            <div class="bj_new_pr_content_two">
                                <div class="d-flex justify-content-between">
                                    <a href="product-single.html">
                                        <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                    </a>
                                    <div class="book_price"><sup>250</sup> <sup>تومان</sup></div>
                                </div>
                                <div class="writer_name"><i class="icon-user"></i> <a href="author-single.html">اشکان موسوی</a></div>
                                <div class="ratting">
                                    <div class="ratting_icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>(252)</span>
                                </div>
                                <a href="checkout.html" class="bj_theme_btn">اکنون بخرید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection


@extends('_master.main')
@section('main')
    <section class="bj_banner_area banner_animation_03" data-bg-color="#f5f5f5">
        <div class="container rtl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bj_banner_content">
                        <div class="offer_text wow fadeInUp">
                            فروش تا <span>{{$_banner['discount']}}% درصد تخفیف</span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                            {{$_banner['title']}}
                        </h2>
                        <p class="wow fadeInUp rtl" data-wow-delay="0.4s">
                            {{$_banner['body']}}
                        </p>
                        <div class="d-flex">
                            <a href="{{ route('shop')}}" class="bj_theme_btn wow fadeInLeft" data-wow-delay="0.2s">فروشگاه
                                جدید</a>
                            <a href="#product_tab_showcase_id" class="bj_theme_btn strock_btn wow fadeInLeft"
                               data-wow-delay="0.3s">به یک تور بروید</a>
                        </div>
                        <div class="d-flex community_info_wrapper wow fadeInUp" data-wow-delay="0.4s">
                            <div class="community_info rtl">
                                <h5>جامعه ما</h5>
                                <div class="people_img">
                                    <div class="avater_img">
                                        <img src="/assets/img/home/avater_one.png" alt=""/>
                                    </div>
                                    <div class="avater_img">
                                        <img src="/assets/img/home/avater2.png" alt=""/>
                                    </div>
                                    <div class="avater_img">
                                        <img src="/assets/img/home/avater3.png" alt=""/>
                                    </div>
                                    <div class="avater_img">
                                        <img src="/assets/img/home/avater4.png" alt=""/>
                                    </div>
                                    <div class="avater_img">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="community_info_number">
                                <div class="number"><span class="counter">100</span>هزار</div>
                                <p>خوانندگان کتاب در سراسر جهان</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bj_banner_img">
                        <img class="wow fadeInRight" data-wow-delay="0.4s" src="/assets/img/home/girl.png" alt=""/>
                        <div class="shape_one">
                            <img class="layer" data-depth="-0.15" src="/assets/img/home/star-one.png" alt=""/>
                        </div>
                        <div class="shape_two">
                            <img class="layer" data-depth="-0.25" src="/assets/img/home/star-two.png" alt=""/>
                        </div>
                        <div class="shape_three">
                            <img class="layer" data-depth="-0.15" src="/assets/img/home/round.png" alt=""/>
                        </div>
                        <div class="shape_four">
                            <img src="/assets/img/home/dot.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area  -->

    <!-- product tab showcase area  -->
    <section class="product_tab_showcase_area sec_padding" id="product_tab_showcase_id">
        <div class="container rtl">
            <div class="section_title wow fadeInUp">
                <h2 class="title title_two rtl">مرور بر اساس ژانرها</h2>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-4">
                    <ul class="nav nav-pills tab_slider_thumb" id="pills-tab-one" role="tablist">
                        @foreach($category as $key=> $category_item)
                            <li role="presentation" class="nav-link {{ $key == 0 ? 'active' : '' }}">
                                <a id="pills-{{ $category_item->slug }}-tab"
                                   data-bs-toggle="pill"
                                   data-bs-target="#pills-{{ $category_item->slug }}"
                                   type="button"
                                   role="tab"
                                   aria-controls="pills-{{ $category_item->slug }}"
                                   aria-selected="{{ $key == 0 ? 'true' : 'false' }}"
                                   style="border: none; background: transparent">
                                    <strong>{{$category_item['title']}}</strong> <span>({{count($category_item->products)}} کتاب ها)</span></a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-8 ltr">
                    <div class="tab-content" id="pills-tabContent-two">
                        @foreach($category as $key =>  $category_item)
                            <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                                 id="pills-{{ $category_item->slug }}"
                                 role="tabpanel"
                                 aria-labelledby="pills-{{ $category_item->slug }}-tab">
                                <div class="tab_slider_content slick_slider_tab">
                                    @foreach($category_item->products as $product )
                                        <div class="item" style="width: 424px;">
                                            <div class="bj_new_pr_item col-xl-10">
                                                <a href="{{route('product' , ['slug' => $product['slug']])}}"
                                                   class="img">
                                                    <img src="{{asset($product->img_thumbnail)}}" alt="book"/>
                                                </a>
                                                <a href="{{ route('add-to-favorite', ['id' => $product->id]) }}
                                                " data-bs-toggle="tooltip"
                                                   data-bs-placement="top"
                                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                                        class="icon_heart_alt"></i></a>
                                                <div class="bj_new_pr_content_two rtl">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="{{route('product' , ['slug' => $product['slug']])}}">
                                                            <h5>{{\Illuminate\Support\Str::limit($product['title'] , 40)}}</h5>
                                                        </a>
                                                        <div class="book_price">
                                                            <sup> {{$product->price}}تومان</sup>
                                                        </div>
                                                    </div>
                                                    <div class="writer_name">
                                                        <i class="icon-user"></i><a
                                                            href="author-single.html">{{$product->author}}</a>
                                                    </div>
                                                    <a href="{{route('product' , ['slug' => $product['slug']])}}"
                                                       class="bj_theme_btn">اکنون بخرید</a>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- product tab showcase area  -->



    <!-- best selling product area  -->
    <section class="best_selling_pr_area sec_padding" data-bg-color="#f5f5f5">
        <div class="container rtl">
            <div class="section_title section_title_two text-center wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="title title_two">ورودی های جدید</h2>
                <p>خواندن کتاب به شما کمک می کند تا مهارت های ارتباطی خود را توسعه دهید</p>
            </div>
            <div class="row">

                @foreach($_product as $_productItem)

                    <div class="col-xl-4 col-md-6">
                        <div class="bj_new_pr_item_two d-flex wow fadeInUp" data-wow-delay="0.2s">
                            <a href="{{route('product',['slug'=>$_productItem['slug']])}}" class="img"><img
                                    src="{{asset($_productItem['img_thumbnail'])}}" alt="book"/></a>
                            <div class="bj_new_pr_content_two">
                                <a href="{{route('product',['slug'=>$_productItem['slug']])}}"
                                   class="category">{{$_productItem->category->titl}}</a>
                                <a href="{{route('product',['slug'=>$_productItem['slug']])}}">
                                    <h4 class="bj_new_pr_title">{{Str::limit($_productItem['title'] , 40) }}</h4>
                                </a>
                                <div class="writer_name">اثری از <a
                                        href="author-single.html">{{$_productItem['author']}} </a></div>
                                <div class="book_price"><sup>{{$_productItem['price']}}</sup><sup>تومان</sup></div>
                                <a href="{{route('product',['slug'=>$_productItem['slug']])}}" class="bj_theme_btn">اکنون
                                    بخرید</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-center mt-4">
                <a href="shop.html" class="bj_theme_btn strock_btn blue_strock_btn wow fadeInUp" data-wow-delay="0.4s">مشاهده
                    همه</a>
            </div>
        </div>
    </section>


    <section class="best_selling_pr_area sec_padding">
        <div class="container">
            <div class="section_title section_title_two text-center wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="title title_two">انتخاب مردم</h2>
                <p>خواندن کتاب به شما کمک می کند تا مهارت های ارتباطی خود را توسعه دهید</p>
            </div>

            <ul class="nav nav-pills best_pr_tab d-flex justify-content-center wow fadeInUp rtl" data-wow-delay="0.4s"
                id="pills-tab" role="tablist">
                <li role="presentation" class="nav-item">
                    <a href="" class="nav-link px-0 {{ request()->routeIs('index') ? 'active' : '' }} "
                       id="pills-best-tab"
                       data-bs-target="#pills-best" role="tab" aria-controls="pills-best" aria-selected="true">
                        پرفروش ترین کتاب ها</a>
                </li>
                <li role="presentation" class="nav-item">
                    <a href="{{route('suggest')}}"
                       class="nav-link px-0 {{ request()->routeIs('suggest') ? 'active' : '' }}" id="pills-offer-tab"
                       data-bs-target="#pills-offer" role="tab" aria-controls="pills-offer" aria-selected="false">
                        پیشنهادات</a>
                </li>
                <li role="presentation" class="nav-item">
                    <a href="" class="nav-link px-0
{{--                     {{ request()->routeIs('rating') ? 'active' : '' }}--}}
                     "
                       id="pills-trending-tab"
                       data-bs-target="#pills-trending" role="tab" aria-controls="pills-trending" aria-selected="false">پرطرفدار</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade explore-menu" id="pills-featured" role="tabpanel"
                     aria-labelledby="pills-featured-tab">
                    <div class="best_slider">
                        <div class="item">
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="/assets/img/home/choice-4.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">پژواک های ابدیت</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-3.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">خیانت</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-1.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">نگهداری از کودک</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-4.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-1.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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


                <div class="tab-pane fade show active" id="pills-best" role="tabpanel" aria-labelledby="pills-best-tab">
                    <div class="best_slider">
                        @foreach($_suggests as $suggestionItem)
                            <div class="item">
                                <div class="bj_new_pr_item">
                                    <a href="{{route('product',['slug'=>$suggestionItem['slug']])}}" class="img">
                                        <img src="{{asset($suggestionItem['img_thumbnail'])}}" alt="book"/>
                                    </a>
                                    <a href="{{route('product',['slug'=>$suggestionItem['slug']])}}"
                                       data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                            class="icon_heart_alt"></i></a>
                                    <div class="bj_new_pr_content_two rtl">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{route('product',['slug'=>$suggestionItem['slug']])}}">
                                                <h4 class="bj_new_pr_title">{{$suggestionItem['title']}}</h4>
                                            </a>
                                            <div class="book_price">
                                                <sup>{{$suggestionItem['price']}}</sup>
                                                <sup>{{$suggestionItem['oldPrice']}} تومان</sup>
                                            </div>
                                        </div>
                                        <div class="writer_name">
                                            <i class="icon-user"></i><a
                                                href="{{route('product' , ['slug' => $suggestionItem['slug']])}}">{{$suggestionItem['author']}}</a>
                                        </div>
                                        <div class="ratting">
                                            <div class="ratting_icon">

                                                @php $star = $suggestionItem['rating'];
                                                @endphp
                                                @for( $index = 0 ; $index < $star ; $index++)
                                                    <i class="fa-solid fa-star"></i>
                                                    {{--                                                    <p>{{$star}}</p>--}}
                                                @endfor
                                                @php $emptyStar = 5 - $star;
                                                @endphp
                                                @for($eStar = 0 ; $eStar < $emptyStar; $eStar++)
                                                    <i class="fa fa-star"></i>
                                                    {{--                                                    <p> {{$emptyStar}}</p>--}}
                                                @endfor

                                            </div>
                                        </div>
                                        <a href="{{route('product',['slug'=>$suggestionItem['slug']])}}"
                                           class="bj_theme_btn">اکنون بخرید</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="tab-pane fade explore-menu" id="pills-offer" role="tabpanel"
                     aria-labelledby="pills-offer-tab">
                    <div class="best_slider">

                        {{--rating foreach--}}
                        {{--
                                                @foreach($rating as $ratingItem)
                                                <div class="item">
                                                    <div class="bj_new_pr_item">
                                                        <a href="product-single.blade.php" class="img">
                                                            <img src="{{route('product',['slug'=>$ratingItem['slug']])}}" alt="book"/>
                                                        </a>
                                                        <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                                           title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                                                class="icon_heart_alt"></i></a>
                                                        <div class="bj_new_pr_content_two rtl">
                                                            <div class="d-flex justify-content-between">
                                                                <a href="product-single.blade.php">
                                                                    <h4 class="bj_new_pr_title">{{$ratingItem['title']}}</h4>
                                                                </a>
                                                                <div class="book_price">
                                                                    <sup>250</sup> <sup>تومان</sup>
                                                                </div>
                                                            </div>
                                                            <div class="writer_name">
                                                                <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                                            </div>
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
                                                @endforeach
                        --}}


                        <div class="item">
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-4.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">خیانت</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-1.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">نگهداری از کودک</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-2.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-3.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                <div class="tab-pane fade explore-menu" id="pills-featured" role="tabpanel"
                     aria-labelledby="pills-featured-tab">
                    <div class="best_slider">
                        <div class="item">
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-4.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">پژواک های ابدیت</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-3.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">خیانت</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-1.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">نگهداری از کودک</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-4.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-1.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                <div class="tab-pane fade explore-menu" id="pills-trending" role="tabpanel"
                     aria-labelledby="pills-trending-tab">
                    <div class="best_slider">
                        <div class="item">
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-2.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">پژواک های ابدیت</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-3.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">خیانت</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-4.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">نگهداری از کودک</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-1.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
                            <div class="bj_new_pr_item">
                                <a href="product-single.blade.php" class="img">
                                    <img src="assets/img/home/choice-2.png" alt="book"/>
                                </a>
                                <a href="my-wishlist.blade.php" data-bs-toggle="tooltip" data-bs-placement="top"
                                   title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                        class="icon_heart_alt"></i></a>
                                <div class="bj_new_pr_content_two rtl">
                                    <div class="d-flex justify-content-between">
                                        <a href="product-single.blade.php">
                                            <h4 class="bj_new_pr_title">با کمال تعجب سارا</h4>
                                        </a>
                                        <div class="book_price">
                                            <sup>250</sup> <sup>تومان</sup>
                                        </div>
                                    </div>
                                    <div class="writer_name rtl">
                                        <i class="icon-user"></i><a href="author-single.html">اشکان موسوی</a>
                                    </div>
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
            </div>
        </div>
    </section>
    <!-- best selling product area  -->



    <!-- new product area  -->
    <section class="bj_new_product_area sec_padding" data-bg-color="#f5f5f5">
        <div class="container rtl">
            <div class="section_title section_title_two text-center">
                <h2 class="title title_two">پیشنهاد محدود</h2>
                <p>تبلیغات ویژه دریافت کنید همه کتاب ها اکنون !50٪ تخفیف دارند</p>
            </div>
            <div id="clockdiv" class="clock" data-date="2024-12-02"></div>
            <div class="row">
                @foreach($_products_discount as $_product_discount)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="bj_new_pr_item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="ribon">{{$_product_discount['discount']}}% تخفیف</div>
                            <a href="{{route('product' , ['slug' => $_product_discount['slug']])}}" class="img"><img
                                    src="{{asset($_product_discount['img_thumbnail'])}}" alt="book"/></a>
                            <div class="bj_new_pr_content rtl">
                                <a href="{{route('product' , ['slug' => $_product_discount['slug']])}}">
                                    <h4 class="bj_new_pr_title">{{$_product_discount['title']}}</h4>
                                </a>
                                <div class="bj_pr_meta">
                                    <div class="writer_name"> اثری از{{$_product_discount['author']}} <a
                                            href="author-single.html"></a></div>
                                    <div class="book_price mt-2">
                                        <del class="me-2">{{$_product_discount['oldPrice']}}</del>
                                        {{$_product_discount['price']}} تومان
                                    </div>
                                </div>
                                <a href="{{route('product',['slug'=>$_product_discount['slug']])}}"
                                   class="bj_theme_btn">اکنون بخرید</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-center mt-4">
                <a href="shop.html" class="bj_theme_btn strock_btn blue_strock_btn wow fadeInUp" data-wow-delay="0.4s">مشاهده
                    همه</a>
            </div>
        </div>
    </section>
    <!-- new product area  -->

    <!-- product featured author area  -->
    <section class="pr_featured_author_area sec_padding">
        <div class="container rtl">
            <div class="section_title">
                <h2 class="title title_two">نویسنده برجسته ماه</h2>
            </div>
            {{--           {{dd($author)}}--}}
            {{--            {{dd($category[0]->Authors)}}--}}
            <div class="row">
                <div class="col-xl-4">
                    <div class="nav nav-pills tab_slider_thumb" id="pills-tab-one" role="tablist">

                        @foreach($category as $key=>$categoryItem)
                            <a class="nav-link active" id="pills-functional-tab" data-bs-toggle="pill"
                               data-bs-target="#pills-functional" role="tab" aria-controls="pills-functional"
                               aria-selected="true">
                                <strong>{{$categoryItem->title}}</strong></a>
                            {{--                                <a--}}

                            {{--                                    id="pills-{{$categoryItem->slug}}-tab"--}}
                            {{--                                    data-bs-toggle="pill"--}}
                            {{--                                    data-bs-target="#pills-{{$categoryItem->slug}}"--}}
                            {{--                                    type="button"--}}
                            {{--                                    role="tab"--}}
                            {{--                                    aria-controls="pills-{{$categoryItem->slug}}"--}}
                            {{--                                    aria-selected="{{ $key == 0 ? 'true' : 'false' }}">--}}
                            {{--                                    {{$categoryItem['title']}}--}}
                            {{--                                </a>--}}

                        @endforeach
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="tab-arrow-controls">
                        <button class="tab-arrow prev-tab">
                            <i class="arrow_carrot-left"></i>
                        </button>
                        <button class="tab-arrow next-tab">
                            <i class="arrow_carrot-right"></i>
                        </button>
                    </div>
                    <div class="tab-content" id="pills-tabContent-three">
                        @foreach($category as $key=>$categoryItem)
                            <div class="tab-pane tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                                 id="pills-{{$categoryItem->slug}}" role="tabpanel"
                                 aria-labelledby="pills-{{$categoryItem->slug}}-tab">
                                <div class="tab_slider_content">
                                    <div class="bj_author_single d-flex align-items-center">
                                        <img src="{{asset($categoryItem->Authors[0]['image'])}}" alt=""/>
                                        <div class="bj_author_single_content rtl">
                                            <h2>{{$categoryItem->Authors[0]['name']}}</h2>
                                            <p>
                                                {{$categoryItem->Authors[0]['description']}}
                                            </p>
                                            <ul class="book_info">
                                                <li>
                                                    <span>تعداد کتاب:&nbsp;</span>{{$categoryItem->Authors[0]['book_number']}}
                                                </li>


                                                <li><span> زبان:&nbsp;</span>{{$categoryItem->Authors[0]['language']}}
                                                </li>
                                                <li><span>تولد:&nbsp;</span>{{$categoryItem->Authors[0]['birth_year']}}
                                                </li>
                                                <li>
                                                    <span>دسته: &nbsp;</span><a
                                                        href="#">{{$categoryItem->Authors[0]['gener']}}</a>
                                                </li>

                                            </ul>
                                            <ul class="list-unstyled f_social_round">
                                                <li>
                                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa-brands fa-reddit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa-brands fa-quora"></i></a>
                                                </li>
                                            </ul>
                                            <a href="{{ route('author-single', ['slug' => $categoryItem->Authors[0]['slug']]) }}"
                                               class="bj_theme_btn text_btn">جزیئات بیشتر<i
                                                    class="arrow_right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- product featured author area   -->

    <!-- bj testimonial area -->
    <section class="bj_testimonial_area sec_padding" data-bg-color="#f5f5f5">
        <div class="container">
            <div class="section_title section_title_two text-center wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="title title_two">گواهینامه</h2>
                <p>آنچه مشتری خوشحال ما گفت</p>
            </div>
            <div class="swiper mySwiper bj_testimonial_inner wow fadeInUp" data-wow-delay="0.4s">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row align-items-center rtl">
                            <div class="col-lg-4">
                                <img class="testimonail_img" src="assets/img/home/testimonial1.jpg" alt=""/>
                            </div>
                            <div class="col-lg-8 rtl">
                                <div class="bj_testimonial_content">
                                    <h4>"تجربه من با مارک یک موفقیت کامل است
                                        خدمات مشتری، طیف گسترده ای از محصولات، فروشگاه تمیز،
                                        تجربه خرید، خبرنامه. با تشکر از شما"
                                    </h4>
                                    <div class="author">
                                        <h5>لیلی خالقی</h5>
                                        <span class="position">مدیرعامل</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row align-items-center rtl">
                            <div class="col-lg-4">
                                <img class="testimonail_img" src="assets/img/home/testimonial2.jpg" alt=""/>
                            </div>
                            <div class="col-lg-8 rtl">
                                <div class="bj_testimonial_content">
                                    <h4>
                                        "تجربه من با مارک یک موفقیت کامل است
                                        خدمات مشتری، طیف گسترده ای از محصولات، فروشگاه تمیز،
                                        تجربه خرید، خبرنامه. با تشکر از شما."
                                    </h4>
                                    <div class="author">
                                        <h5>میکائیل خسروی</h5>
                                        <span class="position">مدیر ارشد محصول</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row align-items-center rtl">
                            <div class="col-lg-4">
                                <img class="testimonail_img" src="assets/img/home/testimonial3.jpg" alt=""/>
                            </div>
                            <div class="col-lg-8 rtl">
                                <div class="bj_testimonial_content">
                                    <h4>
                                        "تجربه من با مارک یک موفقیت کامل است
                                        خدمات مشتری، طیف گسترده ای از محصولات، فروشگاه تمیز،
                                        تجربه خرید، خبرنامه. با تشکر از شما."
                                    </h4>
                                    <div class="author">
                                        <h5>سحر کرمانی</h5>
                                        <span class="position">مدیر خلاق</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row align-items-center rtl">
                            <div class="col-lg-4">
                                <img class="testimonail_img" src="assets/img/home/testimonial4.jpg" alt=""/>
                            </div>
                            <div class="col-lg-8 rtl">
                                <div class="bj_testimonial_content">
                                    <h4>
                                        "تجربه من با مارک یک موفقیت کامل است
                                        خدمات مشتری، طیف گسترده ای از محصولات، فروشگاه تمیز،
                                        تجربه خرید، خبرنامه. با تشکر از شما."
                                    </h4>
                                    <div class="author">
                                        <h5>کوروش زندیان</h5>
                                        <span class="position">مدیر فناوری اطلاعات</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row align-items-center rtl">
                            <div class="col-lg-4">
                                <img class="testimonail_img" src="assets/img/home/testimonial5.jpg" alt=""/>
                            </div>
                            <div class="col-lg-8 rtl">
                                <div class="bj_testimonial_content">
                                    <h4>
                                        "تجربه من با مارک یک موفقیت کامل است
                                        خدمات مشتری، طیف گسترده ای از محصولات، فروشگاه تمیز،
                                        تجربه خرید، خبرنامه. با تشکر از شما."
                                    </h4>
                                    <div class="author">
                                        <h5>فرهاد اسماعیلی</h5>
                                        <span class="position">کارآفرین</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row align-items-center rtl">
                            <div class="col-lg-4">
                                <img class="testimonail_img" src="assets/img/home/testimonial6.jpg" alt=""/>
                            </div>
                            <div class="col-lg-8 rtl">
                                <div class="bj_testimonial_content">
                                    <h4>
                                        "تجربه من با مارک یک موفقیت کامل است
                                        خدمات مشتری، طیف گسترده ای از محصولات، فروشگاه تمیز،
                                        تجربه خرید، خبرنامه. با تشکر از شما."
                                    </h4>
                                    <div class="author">
                                        <h5>ساناز ایران پور</h5>
                                        <span class="position">معمار</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="slider_pagination_inner">
                    <div class="swiper-pagination"></div>
                    <a href="#" class="bj_theme_btn text_btn1 rtl">مشاهده همه بررسی ها<i class="arrow_right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- bj testimonial area -->
    <!-- bj subscribe area -->
    <section class="bj_subscribe_area_two">
        <div class="container">
            <div class="bj_subscribe_inner_two text-center wow fadeInUp banner_animation_03" data-wow-delay="0.2s"
                 data-bg-color="#f5f5f5">
                <div class="bg_shap">
                    <div class="shap_one">
                        <img class="layer" data-depth="-0.15" src="assets/img/home/round_s1.png" alt=""/>
                    </div>
                    <div class="shap_one">
                        <img class="layer" data-depth="-0.25" src="assets/img/home/star_s_2.png" alt=""/>
                    </div>
                    <div class="shap_one">
                        <img class="layer" data-depth="0.15" src="assets/img/home/star_s_1.png" alt=""/>
                    </div>
                    <div class="shap_one">
                        <img class="layer" data-depth="-0.25" src="assets/img/home/cube.png" alt=""/>
                    </div>
                </div>
                <h2>نمایشگاه های آنلاین کتاب 2024</h2>
                <p>
                    نویسندگان ما به نوشته های خود پایبند هستند و مشتاق به اشتراک گذاری هستند
                    اطلاعات بیشتر در مورد کتاب های خود را با شما. پس از آن، شما می توانید
                    هر جا را کاوش کنید.
                </p>
                <a href="#" class="bj_theme_btn">ثبت نام کنید</a>
            </div>
        </div>
    </section>
@endsection










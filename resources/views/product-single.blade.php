@extends('_master.main')
@section('main')

    <!-- breadcrumb area  -->
    <section class="bj_breadcrumb_area text-center banner_animation_03" data-bg-color="#f5f5f5">
        <div class="bg_one" data-bg-image="{{asset('assets/img/breadcrumb/breadcrumb_banner_bg.png')}}"></div>
        <div class="bd_shape one wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img
                data-parallax='{"y": -50}' src="{{asset('assets/img/breadcrumb/book_left1.png')}}" alt="">
        </div>
        <div class="bd_shape two wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                data-parallax='{"y": 30}' src="{{asset('assets/img/breadcrumb/book-left2.png')}}" alt="">
        </div>
        <div class="bd_shape three wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img
                data-parallax='{"y": -50}' src="{{assert('assets/img/breadcrumb/plane-1.png')}}" alt="">
        </div>
        <div class="bd_shape four wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                data-parallax='{"y": 30}' src="{{asset('assets/img/breadcrumb/plan-3.png')}}" alt="">
        </div>
        <div class="bd_shape five wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                data-parallax='{"y": 80}' src="{{asset('assets/img/breadcrumb/plan-2.png')}}" alt="">
        </div>
        <div class="bd_shape six wow fadeInDown layer" data-wow-delay="0.3s" data-depth="0.5"><img
                data-parallax='{"y": -60}' src="{{asset('assets/img/breadcrumb/book-right.png')}}" alt="">
        </div>
        <div class="bd_shape seven wow fadeInUp layer" data-depth="0.6" data-wow-delay="0.4s"><img
                data-parallax='{"x": 50}' src="{{asset('assets/img/breadcrumb/book-right2.png')}}" alt="">
        </div>

        <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay="0.2s">فروشگاه کتاب</h2>
            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="{{route('index')}}">خانه</a></li>
                <li class="active">فروشگاه تک</li>
            </ol>
        </div>
    </section>
    <!-- breadcrumb area  -->
    <section class="product_details_area sec_padding" data-bg-color="#f5f5f5">
        <div class="container rtl">
            @if(session('waitToAccept'))

                <div class="alert alert-success">{{session('waitToAccept')}}</div>
            @endif
            <div class="row gy-xl-0 gy-3">
                <div class="col-xl-9">
                    <div class="bj_book_single me-xl-3">
                        <div class="bj_book_img flip">
                            <div class="front">
                        
                            </div>

                            <div class="pr_ribbon">
                                <span class="product-badge">جدید</span>
                            </div>
                        </div>
                        <div class="bj_book_details">
                            <h2>{{$product['title']}}</h2>
                            <ul class="list-unstyled book_meta">
                                <li>اثری از:<a href="author-single.html"> {{$product['author']}}</a></li>
                                <li>دسته بندی:<a href="shop-sidebar.html">{{$product->category->title}}</a></li>

                            </ul>
                            <div class="ratting review">
                                <div class="star-rating">

                                    <span> {{$product['rating']}} </span>
                                </div>
                                <a href="#product_review" class="woocommerce-review-link">
                                </a>
                            </div>
                            <div class="price">{{$product['price']}} تومان</div>
                            <p>{{$product['body']}}</p>
                            <ul class="product_meta list-unstyled">
                                <li><span>ناشر:</span>{{$product['publisher']}}</li>
                                <li>
                                    <span>تاریخ انتشار:</span>{{\Morilog\Jalali\Jalalian::forge($product['created_at'])->format('%A, %d %B %y')}}
                                </li>
                                <li><span>طول چاپ:</span>{{$product['page_number']}} صفحه</li>
                                <li><span>زبان:</span>{{$product['language']}}</li>
                            </ul>
                            <div class="d-flex">
                                <a href="#" class="bj_theme_btn strock_btn flip_btn">برگشت به عقب</a>

                            </div>
                        </div>
                    </div>
                    <div class="bj_book_single_tab_area me-xl-3">
                        <ul class="nav nav-tabs bj_book_single_tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="product_description-tab" data-bs-toggle="tab"
                                        data-bs-target="#product_description" type="button" role="tab"
                                        aria-controls="product_description" aria-selected="true">جزئیات محصول
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="product_aurhor_desc-tab" data-bs-toggle="tab"
                                        data-bs-target="#product_aurhor_desc" type="button" role="tab"
                                        aria-controls="product_aurhor_desc" aria-selected="false">دیگر نویسندگان
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="product_review-tab" data-bs-toggle="tab"
                                        data-bs-target="#product_review" type="button" role="tab"
                                        aria-controls="product_review" aria-selected="false">یادآوری
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content bj_book_single_tab_content mt-4">
                            <div class="tab-pane fade show active" id="product_description" role="tabpanel"
                                 aria-labelledby="product_description-tab">
                                <div class="product_book_content_details">
                                    <div>
                                        <h5 class="content_header mb-2">مزایای کلیدی</h5>
                                        <ul class="content_text mb-2">
                                            @php $features = explode(',' , $product['key_features']) @endphp
                                            @foreach($features as $feature)
                                                <li>
                                                    {{trim($feature) }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div>
                                        <h5 class="content_header mb-2">توضیحات</h5>
                                        <p class="content_text mb-2">{{$product['details']}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_aurhor_desc" role="tabpanel"
                                 aria-labelledby="product_aurhor_desc-tab">
                                <div class="tab_slider_content">
                                    <div class="bj_author_single d-flex align-items-center rtl">
                                        <img src="{{asset($_author['image'])}}" alt="">
                                        <div class="bj_author_single_content">
                                            <h2>{{$_author['name']}}</h2>

                                            <ul class="book_info">
                                                <li><span>موقعیت:</span>نویسنده کتاب</li>
                                                <li><span>تعداد کتاب:</span>{{$_author['book_number']}}</li>
                                                <li><span>متولد شد:</span>{{$_author['birth_year']}}</li>
                                                <li><span>زبان:</span>{{$_author['language']}}</li>
                                            </ul>
                                            <ul class="list-unstyled f_social_round">
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-reddit"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa-brands fa-quora"></i></a>
                                                </li>
                                            </ul>
                                            <a href="author-single.html" class="bj_theme_btn text_btn">جزئیات بیشتر<i
                                                    class="arrow_right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_review" role="tabpanel"
                                 aria-labelledby="product_review-tab">
                                <div class="reviews-item " id="scrollspyReviews">
                                    <div class="d-flex flex-wrap justify-content-between mb-40 gap-3">
                                        <h4 class="review-title d-flex flex-wrap">{{count($product->comments)}}
                                            نظرات</h4>
                                        <div>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="modal-btn" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                <i class="fas fa-edit"></i>یک نظر بنویسید
                                            </button>

                                            <!-- Modal -->

                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">

                                                    <div class="modal-content modal-item">

                                                        <form
                                                            action="{{route('commentPublish' ,['slug'=>$product['slug']])}}"
                                                            method="POST">
                                                            @csrf
                                                            @auth
                                                                <div class="modal-header border-0 p-0">
                                                                    <h4 class="modal-title mb-50"
                                                                        id="exampleModalLabel">{{auth()->user()->name}}</h4>
                                                                    <button type="button" class="close-btn"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                        <i class="icon_close"></i>
                                                                    </button>
                                                                </div>

                                                                <div class="d-flex admin-content">
                                                                    <div class="user-img">
                                                                        <img src="{{asset(auth()->user()->avatar)}}"
                                                                             alt="Admin">
                                                                    </div>
                                                                    <div>
                                                                        <p class="admin-title">{{auth()->user()->name}}</p>
                                                                    </div>
                                                                    <textarea
                                                                        class="admin-text form-control dynamic-rating-text"
                                                                        placeholder="نظر خود را بنویسید"
                                                                        cols="30" rows="5" name="text"></textarea>
                                                                </div>
                                                            @else

                                                                <div class="modal-header border-0 p-0">
                                                                    <h4 class="modal-title mb-3"
                                                                        id="exampleModalLabel"></h4>
                                                                    <button type="button" class="close-btn"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <i class="icon_close"></i>
                                                                    </button>
                                                                </div>

                                                                <div class="admin-content">
                                                                    <!-- تصویر کاربر -->
                                                                    <div class="user-img mb-2">
                                                                        <img src="" alt="Admin"
                                                                             style="max-width: 100px;">
                                                                    </div>

                                                                    <!-- فیلد ایمیل -->
                                                                    <input type="email" name="email"
                                                                           class="form-control mb-2"
                                                                           placeholder="ایمیل خود را وارد کنید">

                                                                    <!-- متن کامنت -->
                                                                    <textarea name="text"
                                                                              class="admin-text form-control dynamic-rating-text"
                                                                              placeholder="جزئیات تجربه خود را در این مکان به اشتراک بگذارید"
                                                                              cols="30" rows="5"></textarea>
                                                                </div>
                                                            @endauth
                                                            <div class="modal-footer border-0">
                                                                <button type="button" class="cancel-btn"
                                                                        data-bs-dismiss="modal">لغو
                                                                </button>
                                                                <button type="submit" class="post-btn">ارسال
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-lg-0 gy-3">
                            <div class="col-lg-5">
                                <div class="your-rating-review">


                                    <!-- Modal -->
                                    <div class="modal fade" id="editReviewModal" tabindex="-1"
                                         aria-labelledby="editReviewModalLabel" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content modal-item">
                                                <div class="modal-header border-0 p-0">
                                                    <h4 class="modal-title mb-50" id="editReviewModalLabel">
                                                        درود حامد</h4>
                                                    <button type="button" class="close-btn" data-bs-dismiss="modal"
                                                            aria-label="Close"><i class="icon_close"></i></button>
                                                </div>
                                                <div class="d-flex admin-content">
                                                    <div class="user-img">
                                                        <img src="assets/img/profile-img.png" alt="Admin">
                                                    </div>
                                                    <div>
                                                        <p class="admin-title">کامران نادری</p>
                                                        <p class="admin-sub-title">ارسال به صورت عمومی
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="admin-galley">
                                                    <div class="gallery-item">
                                                        <button class="delete-btn"><i
                                                                class="fa-regular fa-trash-can"></i></button>
                                                        <img src="assets/img/shop/best_book1.jpg" alt="">
                                                    </div>

                                                    <label for="formAdminImgFile2">
                                                        <i class="fas fa-image"></i>
                                                    </label>
                                                    <input class="d-none" id="formAdminImgFile2" type="file">
                                                </div>
                                                <div class="modal-footer border-0">
                                                    <button type="button" class="cancel-btn" data-bs-dismiss="modal">
                                                        لغو
                                                    </button>
                                                    <button type="button" class="post-btn">ارسال</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            <div class="d-flex flex-sm-row flex-column justify-content-between gap-3 mb-40">
                                <h4>نظرات</h4>

                            </div>
                            @if(isset($product->comments[0]))
                                @foreach($product->comments as $comment)
                                    <div class="d-md-flex">
                                        <div>
                                            <img class="admin-img"
                                                 src="{{ asset(optional(optional($comment->user)->profile)->picture ?? 'images/default_guest.png') }}"
                                                 alt="Admin">
                                        </div>
                                        <div class="review-text">
                                            <p class="r-title sub-regular-2">{{$comment->user->name ?? 'GUEST'}}</p>
                                            <div class="r-icon">
                                                <div>
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i> 5
                                                </div>
                                                <span>{{\Morilog\Jalali\Jalalian::forge($comment->date)->format('%A, %d %B %y')}}</span>
                                            </div>
                                            <p class="small-2">{{$comment->text}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="product_sidbar">
                        <div class="price_head">خرید جدید: <span class="price"> تومان {{$product['price']}}</span></div>
                        <div class="discount_price">لیست قیمت:
                            <del>{{$product['oldPrice']}}&nbsp;تومان</del>
                        </div>

                        <ul class="list-unstyled">
                            <li>
                                <div class="icon"><img src="/assets/img/arrow.png" alt=""></div>
                                سریع، رایگان دریافت کنید
                                حمل و نقل با<span class="blue_text">رایگان
                                        برمی گرداند</span>
                            </li>
                            <li>
                                <div class="icon"><img src="/assets/img/arrow.png" alt=""></div>
                                <span class="blue_text">ارسال رایگان</span> ارسال اقلام فقط با 25 تومان
                            </li>

                            <li>
                                <div class="icon"><img src="/assets/img/pin.png" alt=""></div>
                                موقعیت تحویل را انتخاب کنید
                            </li>
                        </ul>
                        <h3>در انبار.</h3>

                        <div class="product-qty">
                            تعداد:
                            <div class="cart_quantity">
                                <button class="quantity_btn minus"><i class="icon_minus-06"></i></button>

                                <input type="number" min="1" max="99" step="1" value="1" name="quantity">

                                <button class="quantity_btn plus"><i class="icon_plus"></i></button>
                            </div>
                        </div>

                        <form action="{{ route('add_to_cart', $product['slug']) }}" method="POST">
                            @csrf
                            <input type="hidden" name="quantity" value="1">

                            <div class="d-flex flex-column gap-3">
                                <button type="submit"
                                        class="bj_theme_btn"
                                        data-name="{{ $product['title'] }}"
                                        data-price="{{ $product['price'] }}"
                                        data-img="{{ asset($product['img_thumbnail']) }}"
                                        data-mrp="{{ $product['oldPrice'] }}">
                                    <i class="icon_cart_alt"></i> اضافه کردن به سبد خرید
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="product_details_sidebar">
                        <a class="details_header" data-bs-toggle="collapse" href="#product_details_collapse"
                           role="button"
                           aria-expanded="false" aria-controls="product_details_collapse">
                            <h6 class="mb-0">جزئیات محصول</h6>
                            <i class="fa-solid fa-chevron-up"></i>
                        </a>
                        <div class="collapse show" id="product_details_collapse">
                            <div class="product_details_section_wrap">
                                <div class="product_details_section_content mb-3 mt-3">
                                    <span class="product_details_section_key">تاریخ انتشار :</span>
                                    <span
                                        class="product_details_section_value">{{\Morilog\Jalali\Jalalian::forge($product['created_at'])->format('%B %d، %Y')}}</span>
                                </div>
                                <div class="product_details_section_content mb-3">
                                    <span class="product_details_section_key">طول</span>
                                    <span class="product_details_section_value">{{$product['page_number']}}صفحه </span>
                                </div>
                                <div class="product_details_section_content mb-3">
                                    <span class="product_details_section_key">نسخه :</span>
                                    <span class="product_details_section_value">نسخه 3</span>
                                </div>
                                <div class="product_details_section_content mb-3">
                                    <span class="product_details_section_key">زبان :</span>
                                    <span class="product_details_section_value">{{$product['language']}}</span>
                                </div>
                                <div class="product_details_section_content mb-3">
                                    <span class="product_details_section_key">دسته بندی:</span>
                                    <div class="product_details_section_value">
                                        <a href="https://www.packtpub.com/en-us/data" class="fw-600">
                                            {{$product->category['title']}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>
    </section>



    <section class="bj_frequently_bought_area sec_padding pt-0" data-bg-color="#f5f5f5">
        <div class="container rtl">
            <div class="section_title text-center">
                <h2 class="title_two">اغلب با هم خرید می شود</h2>
                <p>تبلیغات ویژه دریافت کنید همه کتاب ها اکنون !50٪ تخفیف دارند</p>
            </div>
            <div class="row gy-xl-0 gy-4">
                @foreach($relatedProduct as $product)
                    <div class="col-xl-3 col-lg-3 col-sm-6">

                        <div class="bj_new_pr_item mb-0 wow fadeInUp" data-wow-delay="0.2s">

                            <a href="{{ route('product', ['slug' => $product['slug']]) }}" class="img">
                                <img src="{{ asset($product['img_thumbnail']) }}" alt="book">
                            </a>
                            <div class="bj_new_pr_content">
                                <a href="{{ route('product', ['slug' => $product['slug']]) }}">
                                    <h4 class="bj_new_pr_title">{{\Illuminate\Support\Str::limit($product['title'] , 35)}}</h4>
                                </a>
                                <div class="bj_pr_meta d-flex">
                                    <div class="norm_text ">{{ $product['author'] }}</div>
                                    <div class="norm_text">{{ $product['page_number'] }}</div>
                                    <div class="ratting"><i class="fas fa-star"></i>
                                        <span>{{ $product['rating'] }}</span>
                                    </div>
                                </div>


                                <div class="product_varaiation">
                                    <div class="book_price mt-2">
                                        <del class="me-2">{{ $product['oldPrice'] }}</del>
                                        {{ $product['price'] }}&nbsp;تومان
                                    </div>
                                </div>
                                <form action="{{ route('add_to_cart',['slug'=>$product['slug']]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit"
                                            class="bj_theme_btn "
                                            data-name="{{ $product['title'] }}"
                                            data-price="{{ $product['price'] }}"
                                            data-mrp="{{ $product['oldPrice'] }}"
                                            data-img="{{ asset($product['img_thumbnail']) }}">
                                        سبد خرید اضافه شود
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection

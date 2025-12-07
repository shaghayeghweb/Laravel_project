@extends('_master.main')
@section('main')
    <section class="bj_account_dashboard" data-bg-color="#f5f5f5">
        <div class="container rtl">
            <div class="row">
                <div class="col-lg-3">
                    <div class="account_dashboard_sidebar">
                        <div class="sidebar_widget_body d-flex account_dashboard_sidebar_profile">
                            <div class="">
                                <img src="{{ asset(optional($user->profile)->picture ?? 'images/default-profile.png') }}" alt="account">
                            </div>
                            <div class="">
                                <div class="greetings">درود</div>
                                <div class="name">{{$user->name}}</div>

                            </div>
                        </div>
                        <div class="sidebar_widget_body p-0">
                            <ul class="sidebar_widget_menu">
                                <li><a href="{{route('home')}}">پروفایل من</a></li>
                                <li><a href="{{route('show_cart')}}">سفارشات من</a></li>
                                <li><a class="active" href="{{route('show-favorite-list')}}">لیست علاقه مندی من</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-lg-9">
                    <div class="account_dashboard_body">
                        <div class="account_dashboard_content">
                            <div class="account_dashboard_content_header">
                                لیست علاقه مندی من
                                {{--                                    <p>شما 3 محصول در لیست علاقه مندی های خود دارید</p>--}}
                            </div>
                            <div class="content_body">
                                <div class="wishlist_product_list">
                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    @forelse($favoriteItems as $item)
                                        <div class="my_account_book list-view">
                                            <div class="my_account_book_img">
                                                <img src="{{ asset($item['img_thumbnail']) }}" alt="cart">

                                            </div>
                                            <div class="my_account_book_content">
                                                <a href="product-single.html">
                                                    <div class="my_account_book_title">{{$item['title']}}
                                                    </div>
                                                </a>

                                                <div class="author_name">{{ $item['author'] }}</div>
                                                <div class="book_price">
                                                    <span class="discount_amount">
                                                        تومان {{ $item['price'] }}
                                                    </span>
                                                    <span class="mrp_amount">
                                                                                                                تومان                                                   {{ number_format($item['oldPrice']) }}

                                                    </span>
                                                </div>


{{--                                                <button class="bj_theme_btn strock_btn add-to-cart-automated"--}}
{{--                                                        data-name="زمزمه های نیمه شب" data-price="19.99"--}}
{{--                                                        data-img="assets/img/cart/best_book1.jpg" data-mrp="29.99"><i--}}
{{--                                                        class="fa-solid fa-cart-plus"></i> اضافه کردن به سبد خرید--}}
{{--                                                </button>--}}
                                            </div>
                                            <div class="my_account_book_action">
                                                <a href="#" class="remove_btn"><i class="ti-trash"></i></a>
                                            </div>
                                        </div>
                                    @empty
                                        <p>هیچ محصولی در علاقه‌مندی‌ها نیست.</p>
                                    @endforelse

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection


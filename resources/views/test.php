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
                        <div class="bj_new_pr_item">
                            <a href="product-single.blade.php" class="img">
                                <img src="{{asset($product->img_thumbnail)}}" alt="book"/>
                            </a>
                            <a href="my-wishlist.blade.php" data-bs-toggle="tooltip"
                               data-bs-placement="top"
                               title="اضافه به علاقه مندی" class="wish_btn" tabindex="-1"><i
                                    class="icon_heart_alt"></i></a>
                            <div class="bj_new_pr_content_two rtl">
                                <div class="d-flex justify-content-between">
                                    <a href="product-single.blade.php">
                                        <h5>{{$product->title}}</h5>
                                    </a>
                                    <div class="book_price">
                                        <sup>{{$product->price}}</sup> <sup>تومان</sup>
                                    </div>
                                </div>
                                <div class="writer_name">
                                    <i class="icon-user"></i><a
                                        href="author-single.html">{{$product->author}}</a>
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
                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>

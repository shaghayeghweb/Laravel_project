@extends('_master.main')
@section('main')
        <!-- Dashboard area -->
        <section class="bj_account_dashboard" data-bg-color="#f5f5f5">
            <div class="container rtl">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="account_dashboard_sidebar">
                            <div class="sidebar_widget_body d-flex account_dashboard_sidebar_profile">
                                <div class="">
                                    <img src="assets/img/profile-img.png" alt="account">
                                </div>
                                <div class="">
                                    <div class="greetings">درود</div>
                                    <div class="name">مازیار منوچهری</div>

                                </div>
                            </div>
                            <div class="sidebar_widget_body p-0">
                                <ul class="sidebar_widget_menu">
                                    <li><a href="my-account.html">پروفایل من</a></li>
                                    <li><a class="active" href="my-address.blade.php">آدرس</a></li>
                                    <li><a href="my-orders.html">سفارشات من</a></li>
                                    <li><a href="my-wishlist.html">علاقه مندی ها</a></li>
                                    <li><a href="my-following-authors.html">نویسندگانی که دنبال میکنم</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-9">
                        <div class="bj_checkout_content me-0 mt-20">
                            <div class="content_header">
                               اضافه کردن آدرس جدید
                                <span>(لطفا اطلاعات خود را پر کنید)</span>
                            </div>
                            <div class="content_body">
                                <div class="porduct_pickup_location_wrapper mb-3">
                                </div>
                                <form class=" row gy-3" action="#" method="post">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="name" required>
                                        <label class="floating-label">نام کامل *</label>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" id="phone_no" required>
                                        <label class="floating-label">شماره موبایل *</label>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" id="alternative_phone_no" required>
                                        <label class="floating-label">کد پستی </label>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="selectpickers">
                                            <option value="Select City" disabled selected="selected">انتخاب استان
                                            </option>
                                            <option value="Comilla">تهران</option>
                                            <option value="Dhaka">البرز</option>
                                            <option value="Chittagong">اصفهان</option>
                                            <option value="Khulna">کرمان</option>
                                            <option value="Rajshahi">قزوین</option>
                                            <option value="Rangpur">قم</option>
                                            <option value="Mymensingh">لرستان</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select selectpickers">
                                            <option value="Select Area" disabled selected="selected">انتخاب شهر
                                            </option>
                                            <option value="Comilla">تهران</option>
                                            <option value="Dhaka">البرز</option>
                                            <option value="Chittagong">اصفهان</option>
                                            <option value="Khulna">کرمان</option>
                                            <option value="Rajshahi">قزوین</option>
                                            <option value="Rangpur">قم</option>
                                            <option value="Mymensingh">لرستان</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control message" required></textarea>
                                        <label class="floating-label">آدرس</label>
                                    </div>
                                    <div class="col-md-12 text-start">
                                        <button type="submit" class="bj_theme_btn">ذخیره آدرس</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection


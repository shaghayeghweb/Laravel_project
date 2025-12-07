@extends('_master.main')
@section('main')

{{--
    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5>ویرایش دسته بندی</h5>
                    <ul>
                        <li><a href="index.blade.php">کرت</a></li>
                        <li>ویرایش  دسته بندی</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="cr-card card-default">
                        <div class="cr-card-content">

                            <form class="row cr-product-uploads" action="{{route('updateUser' , $user->id )}}" method="post">
                                @csrf
                                <div class="col-lg-8">
                                    <div class="cr-vendor-upload-detail">
                                        <div class="row g-3" >
                                            <div class="col-md-12">
                                                <label for="inputEmail4" class="form-label">نام کاربر</label>
                                                <input type="text" class="form-control slug-title" id="name" value="{{old('name' , $user['name'])}}" name="name">
                                            </div>

                                            <div class="col-md-12">
                                                <label for="slug" class="form-label">ایمیل</label>
                                                <div class="col-12">
                                                    <input id="email" name="email" value="{{old('email' , $user['email'])}}" class="form-control here set-slug" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn cr-btn-primary border border-dark">ثبت</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
--}}

<div class="cr-main-content">
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <div class="cr-page-title cr-page-title-2">
            <div class="cr-breadcrumb">
                <h5>ویرایش کاربر</h5>
                <ul>
                    <li><a href="index.blade.php">کرت</a></li>
                    <li>ویرایش کاربر</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cr-card card-default">
                    <div class="cr-card-content">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form class="row cr-product-uploads" action="{{route('updateUser' , $user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-4 mb-991">
                                <div class="cr-vendor-img-upload">

                                    <div class="cr-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type="file" id="product_main" class="cr-image-upload"
                                                       accept=".png, .jpg, .jpeg" name="avatar" required>
                                                <label for="product_main"><i class="ri-pencil-line"></i></label>
                                            </div>
                                            <div class="avatar-preview cr-preview">
                                                <div class="imagePreview cr-div-preview">
                                                    <img id="imgPreview" class="cr-image-preview"
                                                         src="{{asset($user['avatar'])}}"
                                                         alt="پیش‌نمایش تصویر" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cr-vendor-upload-detail">
                                    <div class="row g-3" >
                                        <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label fw-bold">نام کاربر</label>

                                            <input type="text" class="form-control slug-title " id="name" value="{{old('name' , $user['name'])}}" name="name">

                                        </div>




                                        <div class="col-md-12">
                                            <label for="slug" class="form-label">ایمیل</label>
                                                <input id="email" name="email" value="{{old('email' , $user['email'])}}" class="form-control here set-slug" type="email">
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn cr-btn-primary border border-dark">ثبت</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

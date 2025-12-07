@extends('_master.main')
@section('main')

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

                            <form class="row cr-product-uploads" action="{{route('updateCategory' , $category->slug )}}" method="post">
                                @csrf
                                <div class="col-lg-8">
                                    <div class="cr-vendor-upload-detail">
                                        <div class="row g-3" >
                                            <div class="col-md-12">
                                                <label for="inputEmail4" class="form-label">نام محصول</label>
                                                <input type="text" class="form-control slug-title" id="title" value="{{old('title' , $category['title'])}}" name="title">
                                            </div>

                                            <div class="col-md-12">
                                                <label for="slug" class="form-label">اسلاگ</label>
                                                <div class="col-12">
                                                    <input id="slug" name="slug" value="{{old('slug' , $category['slug'])}}" class="form-control here set-slug" type="text">
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


@endsection

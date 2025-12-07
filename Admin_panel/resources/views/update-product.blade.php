@extends('_master.main')
@section('main')

    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5>ویرایش محصول</h5>
                    <ul>
                        <li><a href="index.blade.php">کرت</a></li>
                        <li>ویرایش محصول</li>
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
                            <form class="row cr-product-uploads" action="{{route('updateProduct' , $updateProduct->slug)}}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="col-lg-4 mb-991">
                                    <div class="cr-vendor-img-upload">

                                        <div class="cr-vendor-main-img">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type="file" id="product_main" class="cr-image-upload"
                                                           accept=".png, .jpg, .jpeg" name="img_thumbnail" required>
                                                    <label for="product_main"><i class="ri-pencil-line"></i></label>
                                                </div>
                                                <div class="avatar-preview cr-preview">
                                                    <div class="imagePreview cr-div-preview">
                                                        <img class="tbl-thumb"
                                                             src="{{ asset(
         old('img_thumbnail')
         ?? (file_exists(public_path($updateProduct['img_thumbnail']))
             ? $updateProduct['img_thumbnail']
             : 'storage/' . $updateProduct['img_thumbnail'])
     ) }}"
                                                             alt="تصویر محصول">


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="cr-vendor-upload-detail">
                                        <div class="row g-3" >
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">نام محصول</label>
                                                <input type="text" class="form-control slug-title" id="title" value="{{old('title' , $updateProduct['title'])}}" name="title">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label"> دسته بندی ها را انتخاب کنید</label>
                                                <select class="form-control form-select" name="category_id">
                                                    @foreach($categoryList as $categoryItem)
                                                        <option value="{{ $categoryItem->id }}" {{ (old('category_id', $updateProduct->category_id) == $categoryItem->id) ? 'selected' : '' }}>
                                                            {{ $categoryItem->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="slug" class="col-12 col-form-label">اسلاگ</label>
                                                <div class="col-12">
                                                    <input id="slug" name="slug" value="{{old('slug' , $updateProduct['slug'])}}" class="form-control here set-slug" type="text">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">قیمت <span>( تومان
															)</span></label>
                                                <input type="number" class="form-control" name="price" value="{{old('price' , $updateProduct['price'])}}" id="price">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">تعداد</label>
                                                <input type="number" value="{{old('quantity' , $updateProduct['quantity'])}}" class="form-control" name="quantity" id="quantity">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">تخفیف</label>
                                                <input type="number" name="discount" class="form-control" value="{{old('discount' , $updateProduct['discount'])}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">زبان</label>
                                                <input type="text" value="{{old('language' , $updateProduct['language'])}}" name="language" class="form-control slug-title" id="language" >
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

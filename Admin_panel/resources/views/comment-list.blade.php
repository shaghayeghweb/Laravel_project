@extends('_master.main')
@section('main')
    <!-- main content -->
    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5>لیست نظرات</h5>
                    <ul>
                        <li><a href="index.blade.php">کرت</a></li>
                        <li>لیست نظرات</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cr-card card-default product-list">
                        <div class="cr-card-content ">
                            <div class="table-responsive">
                                <table id="product_list" class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>نظر</th>
                                        <th>نام</th>
                                        <th>محصول</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ</th>
                                        <th>عمل</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    @if(session('successDelete'))
                                        <div class="alert alert-success">{{ session('successDelete') }}</div>
                                    @endif
                                    @foreach($comments as $comment)
                                        <tr>


                                            <td>{{$comment->text}}</td>
                                            <td>
                                                @if($comment->user)
                                                    {{$comment->user->name}}
                                                @else
                                                    <span style="color: red; font-weight: bold;">مهمان</span>
                                            @endif
                                            </td>
                                            <td>{{$comment->product->title}}</td>
                                            <td>@if($comment['status'] == 1)
                                                    <span class="text-success"> تایید شده</span>
                                                @else
                                                    <span class="text-primary">  در انتظار</span>
                                                @endif
                                            </td>
                                            <td>{{\Morilog\Jalali\Jalalian::forge($comment->date)->format('%A, %d %B %y')}}</td>
                                            <td>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
															<span class="sr-only"><i
                                                                    class="ri-settings-3-line"></i></span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item text-success" href="{{route('publishComment' , [ 'id'=>$comment['id']])}}">انتشار</a>

                                                        <a  class=" text-danger dropdown-item "  href="{{route('deleteComment' ,  ['id'=>$comment['id']])}}">حذف</a>


                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

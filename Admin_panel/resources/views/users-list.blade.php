@extends('_master.main')
@section('main')

    <!-- main content -->
    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5>لیست کاربران</h5>
                    <ul>
                        <li><a href="index.blade.php">کرت</a></li>
                        <li>لیست کاربران</li>
                    </ul>
                </div>
            </div>
            @if(session('delUserSuccess'))
                <div class="alert alert-success">{{ session('delUserSuccess') }}</div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="cr-card" id="dealtbl">
                        <div class="cr-card-header">
                            <h4 class="cr-card-title">کاربر</h4>
                            <div class="header-tools">
                                <a href="javascript:void(0)" class="m-r-10 cr-full-card"><i
                                        class="ri-fullscreen-line"></i></a>
                                <div class="cr-date-range dots">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="cr-card-content card-default">
                            <div class="deal-table">
                                <div class="table-responsive tbl-1200">
                                    <table id="vendor-list" class="table">
                                        <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>پروفایل</th>
                                            <th></th>
                                            <th>نام</th>
                                            <th>ایمیل</th>
                                            <th>عمل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user as $userItem)
                                            <tr>
                                                <td class="token">{{$userItem['id']}}</td>
                                                <td><img class="cat-thumb" src="{{ file_exists(public_path($userItem['avatar']))
                 ? asset($userItem['avatar']) : asset('storage/' . $userItem['avatar']) }}" alt="clients Image">

                                                </td>
                                                <td>
                                                    <a href="{{ route('userProfile', $userItem['id']) }}" class="btn text-dark fw-bold">مشاهده پروفایل</a>

                                                </td>

                                                <td>{{$userItem['name']}}</td>
                                                <td>{{$userItem['email']}}</td>

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
                                                            <a class="dropdown-item text-success" href="{{route('updateUserPage' ,  ['id'=>$userItem['id']])}}">ویرایش</a>

                                                            <a  class=" text-danger dropdown-item "  href="{{route('deleteUser' ,  ['id'=>$userItem['id']])}}">حذف</a>
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
    </div>

@endsection

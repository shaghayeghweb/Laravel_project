@extends('_master.main')
@section('main')
		<!-- main content -->
		<div class="cr-main-content">
			<div class="container-fluid">
                @if(session('catUpdateSuccess'))
                    <div class="alert alert-success col-5"> {{session('catUpdateSuccess')}}</div>
                @endif
				<!-- Page title & breadcrumb -->
				<div class="cr-page-title cr-page-title-2">
					<div class="cr-breadcrumb">
						<h5>دسته بندی</h5>
						<ul>
							<li><a href="index.blade.php">کرت</a></li>
							<li>دسته بندی</li>
						</ul>
					</div>
				</div>
				<div class="row cr-category">
					<div class="col-xl-4 col-lg-12">
						<div class="team-sticky-bar">
							<div class="col-md-12">
								<div class="cr-cat-list cr-card card-default mb-24px">
									<div class="cr-card-content">
										<div class="cr-cat-form">
											<h3> افزودن دسته جدید </h3>


											<form method="post" action="{{route('addCategory')}}" >
                                                @csrf
												<div class="form-group">
													<label>نام</label>
													<div class="col-12">
														<input id="text" name="title"
															class="form-control here slug-title"  type="text">
													</div>
												</div >

												<div class="form-group">
													<label>اسلاگ</label>
													<div class="col-12">
														<input id="slug" name="slug"  class="form-control here set-slug"
															type="text">
													</div>
												</div>

												<div class="row">
													<div class="col-12 d-flex">

                                                        <button type="submit" class="btn cr-btn-primary border border-dark">ثبت</button>

                                                    </div>
												</div>

											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-12">
						<div class="cr-cat-list cr-card card-default">
							<div class="cr-card-content ">
								<div class="table-responsive tbl-800">
									<table id="cat_data_table" class="table" style="padding: 4px 8px;">
										<thead>
											<tr>
												<th>نام</th>
												<th>محصول</th>
												<th>وضعیت</th>
                                                <th></th>
												<th>عمل</th>
											</tr>
										</thead>

										<tbody>
                                        @if(session('catSuccess'))
                                            <div class="alert alert-success">{{ session('catSuccess') }}</div>
                                        @endif
                                        @if(session('catDeleteSuccess'))
                                            <div class="alert alert-success">{{ session('catDeleteSuccess') }}</div>
                                        @endif
                                        @foreach($category as $categoryItem)
											<tr>
												<td>{{$categoryItem['title']}}</td>
												<td>{{$categoryItem->products->count()}}</td>
                                                <td class="active">
                                                    @if($categoryItem['status'])
                                                        <span class="text-success">فعال</span>
                                                    @else
                                                        <span class="text-danger">غیرفعال</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{route('enableCategory' , $categoryItem->slug)}}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="radius-30 default-btn color-success">فعال</button>
                                                    </form>

                                                    <form action="{{ route('disableCategory', $categoryItem->slug) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="radius-30 default-btn color-danger">غیرفعال</button>
                                                    </form>
                                                </td>

                                                <td>
													<div>
														<button type="button"
															class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static">
															<span class="sr-only"><i
																	class="ri-settings-3-line"></i></span>
														</button>

                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{route('updateCategoryPage' , $categoryItem['slug'])}}">ویرایش</a>
                                                            <a href="{{ route('deleteCategory', $categoryItem['slug']) }}" class="text-danger dropdown-item">حذف</a>
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

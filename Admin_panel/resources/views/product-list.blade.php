@extends('_master.main')
@section('main')
		<!-- main content -->
		<div class="cr-main-content">
			<div class="container-fluid">
				<!-- Page title & breadcrumb -->
				<div class="cr-page-title cr-page-title-2">
					<div class="cr-breadcrumb">
						<h5>لیست محصول</h5>
						<ul>
							<li><a href="index.blade.php">کرت</a></li>
							<li>لیست محصول</li>
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
												<th>محصول</th>
												<th>نام</th>
												<th>قیمت</th>
												<th>تخفیف</th>
{{--												<th>خریداری شده</th>--}}
												<th> انبار</th>
												<th>وضعیت</th>
												<th>تاریخ</th>
												<th>عمل</th>
											</tr>
										</thead>

										<tbody>
                                        @if(session('successDelete'))
                                            <div class="alert alert-success">{{ session('successDelete') }}</div>
                                        @endif
                                        @if(session('updateSuccess'))
                                            <div class="alert alert-success">{{session('updateSuccess')}}</div>
                                        @endif
                                        @foreach($productList as $productListItem)
											<tr>

                                                <td>
                                                    <img class="tbl-thumb"
                                                         src="{{ file_exists(public_path($productListItem['img_thumbnail']))
                 ? asset($productListItem['img_thumbnail'])
                 : asset('storage/' . $productListItem['img_thumbnail']) }}"
                                                         alt="تصویر محصول">
                                                </td>

                                                <td>{{\Illuminate\Support\Str::limit($productListItem['title'] , 40)}}</td>
												<td>{{$productListItem['price']}} تومان</td>
												<td>{{$productListItem['discount']}}% تخفیف</td>
												<td>{{$productListItem['quantity']}}</td>
                                                @if($productListItem['quantity'] == 0)
                                                    <td><span style="color :red;"> غیرفعال</span></td>
                                                @else
                                                    <td><span class="active">فعال</span></td>


                                                @endif
												<td>{{\Morilog\Jalali\Jalalian::forge($productListItem['created_at'])->format('%A, %d %B %y')}}</td>
												<td>
													<div class="d-flex justify-content-center">
														<button type="button"
															class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static">
															<span class="sr-only"><i
																	class="ri-settings-3-line"></i></span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="{{route('updateProductPage' , $productListItem['slug'])}}">ویرایش</a>
                                                            <a href="{{ route('deleteProduct', $productListItem['slug']) }}" class="text-danger dropdown-item">حذف</a>
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

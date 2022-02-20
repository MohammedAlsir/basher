@extends('layout.main')
@section('main_title','تعديل بيانات الصيدلية ')

@section('content')
  	<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>  تعديل بيانات الصيدلية
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form method="POST" action="{{route('pharmacy.update',$pharmacy->id)}}" class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}

											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">اسم الصيدلية</label>
													<div class="col-md-4">
														<input type="text" name="name" value="{{$pharmacy->name}}" class="form-control input-circle" placeholder="">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">العنوان</label>
													<div class="col-md-4">
														<input type="text"  name="address" value="{{$pharmacy->address}}" class="form-control input-circle" placeholder="">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">البريد الالكتروني</label>
													<div class="col-md-4">
														<input type="email" value="{{$pharmacy->email}}"  name="email" class="form-control input-circle" placeholder="">
													</div>
												</div>


											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn btn-circle blue">تعديل  </button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
                                </div>
							</div>

						</div>
@endsection



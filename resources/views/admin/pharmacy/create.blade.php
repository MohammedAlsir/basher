@extends('layout.main')
@section('main_title','إضافة صيدلية جديدة')

@section('content')
  	<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>إضافة صيدلية جديدة
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form method="POST" action="{{route('pharmacy.store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @csrf
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">اسم الصيدلية</label>
													<div class="col-md-4">
														<input type="text" name="name" class="form-control input-circle" placeholder="">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">العنوان</label>
													<div class="col-md-4">
														<input type="text"  name="address" class="form-control input-circle" placeholder="">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">البريد الالكتروني</label>
													<div class="col-md-4">
														<input type="email"  name="email" class="form-control input-circle" placeholder="">
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn btn-circle blue">إضافة </button>
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



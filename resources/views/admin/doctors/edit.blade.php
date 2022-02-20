@extends('layout.main')
@section('main_title','تعديل بيانات الطبيب ')

@section('content')
  	<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>  تعديل بيانات الطبيب
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form method="POST" action="{{route('doctors.update',$doctor->id)}}" class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}

                                            @csrf

											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">اسم الطبيب</label>
													<div class="col-md-4">
														<input type="text" name="name" value="{{$doctor->name}}" class="form-control input-circle" placeholder="">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">العنوان</label>
													<div class="col-md-4">
														<input type="text"  name="address" value="{{$doctor->address}}" class="form-control input-circle" placeholder="">
													</div>
												</div>

                                                 <div class="form-group">
													<label class="col-md-3 control-label">الدرجة العلمية </label>
													<div class="col-md-4">
														 <select class="form-control input-circle" name="qualifications" id="">
                                                            <option  {{$doctor->qualifications == 'ماجستير' ? 'selected':''}} value="ماجستير">ماجستير</option>
                                                            <option  {{$doctor->qualifications == 'بكالاريوس' ? 'selected':''}} value="بكالاريوس">بكالاريوس</option>
                                                            <option  {{$doctor->qualifications == 'دبلوم' ? 'selected':''}} value="دبلوم">دبلوم</option>
                                                        </select>
													</div>
												</div>



                                                 <div class="form-group">
													<label class="col-md-3 control-label"> التخصص</label>
													<div class="col-md-4">
                                                        <select  class="form-control input-circle" name="specialist_id" id="">
                                                            {{-- <option selected value="{{$doctor->specialist->id}}">{{$doctor->specialist->specalty_name}}</option> --}}
                                                            @foreach ($specialists as $item)
                                                                @if ($doctor->specialist->id == $item->id)
                                                                    <option selected value="{{$item->id}}">{{$item->specalty_name}}</option>
                                                                @else
                                                                    <option value="{{$item->id}}">{{$item->specalty_name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
														{{-- <input type="text" name="specialist_id" class="form-control input-circle" placeholder=""> --}}
													</div>
												</div>

                                                 <div class="form-group">
													<label class="col-md-3 control-label">سنوات الخبرة</label>
													<div class="col-md-4">
														<input type="number" name="years" class="form-control input-circle" value="{{$doctor->years}}" placeholder="">
													</div>
												</div>

                                                <div class="form-group">
													<label class="col-md-3 control-label">البريد الالكتروني </label>
													<div class="col-md-4">
														<input type="email" name="email" value="{{$doctor->email}}" class="form-control input-circle" placeholder="">
													</div>
												</div>

                                                 <div class="form-group">
													<label class="col-md-3 control-label">الصورة </label>
													<div class="col-md-4">
														<input type="file" name="photo"  class="form-control input-circle" placeholder="">
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



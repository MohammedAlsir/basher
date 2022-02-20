@extends('layout.main')
@section('afterCss')

@endsection
@section('main_title','الاطباء')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>الاطباء
							</div>

						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th>
									 الاسم
								</th>
								<th>
									 التخصص
								</th>
								<th>
									 سنوات الخبرة
								</th>
								<th>
									 العنوان
								</th>
								<th>
									 الاعدادات
								</th>
							</tr>
							</thead>
							<tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>
                                            {{$doctor->name}}
                                        </td>
                                        <td>
                                            {{$doctor->specialist->specalty_name}}
                                        </td>
                                        <td>
                                           {{$doctor->years}}
                                        </td>
                                        <td>
                                            {{$doctor->address}}
                                        </td>
                                        <td>

                                             <a href="{{route('doctors.show',$doctor->id)}}" class="btn btn-icon-only ">
                                              <i class="fa fa-user"></i>
                                            </a>

                                            <a href="{{route('doctors.edit',$doctor->id)}}" class="btn btn-icon-only green">
                                              <i class="fa fa-edit"></i>
                                            </a>

                                            <form style="display: inline-block" action="{{route('doctors.destroy',[$doctor->id])}}" method="POST">
                                                        {{ csrf_field()}}
                                                        {{ method_field('delete') }}



                                                <button type="submit" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill red">
                                                            <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

@endsection



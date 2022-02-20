@extends('layout.main')
@section('main_title','الصيدليات ')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>الصيدليات
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
									 العنوان
								</th>
                                <th>
									 البريد الالكتروني
								</th>
								<th>
									 الاعدادات
								</th>
							</tr>
							</thead>
							<tbody>
                                @foreach ($pharmacy as $item)
                                    <tr>
                                        <td>
                                            {{$item->name}}
                                        </td>
                                        <td>
                                           {{$item->address}}
                                        </td>
                                         <td>
                                           {{$item->email}}
                                        </td>
                                        <td>

                                             <a href="{{route('pharmacy.show',$item->id)}}" class="btn btn-icon-only ">
                                              <i class="fa fa-user"></i>
                                            </a>

                                            <a href="{{route('pharmacy.edit',$item->id)}}" class="btn btn-icon-only green">
                                              <i class="fa fa-edit"></i>
                                            </a>

                                            <form style="display: inline-block" action="{{route('pharmacy.destroy',[$item->id])}}" method="POST">
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



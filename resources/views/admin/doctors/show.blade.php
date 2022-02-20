@extends('layout.main')

@section('main_title','الاطباء')


@section('content')
<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet" >
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-userpic" style="width: 250px; height: 250px; display: inline-block;">
                                        <img style="width: 250px; height: 250px;" src="{{asset('uploads/'.$doctor->photo)}}" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <!-- SIDEBAR USERPIC -->

                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name">
                                            <h3>{{$doctor->name}}</h3>
                                        </div>
                                        <div class="profile-usertitle-job">
                                             <h6></h6>
                                        </div>
                                    </div>

                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <table class="table table-hover">
                                            <tr>
                                                <td>التخصص</td>
                                                <td>{{$doctor->specialist->specalty_name}}</td>
                                            </tr>
                                             <tr>
                                                <td>سنوات الخبرة </td>
                                                <td>{{$doctor->years}} </td>
                                            </tr>
                                             <tr>
                                                <td>الدرجة العلمية   </td>
                                                 <td>{{$doctor->qualifications}} </td>
                                            </tr>
                                             <tr>
                                                <td>العنوان </td>
                                                 <td>{{$doctor->address}} </td>
                                            </tr>
                                             <tr>
                                                <td>البريد الالكتروني  </td>
                                                 <td>{{$doctor->email}} </td>
                                            </tr>

                                        </table>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                            </div>
						</div>

					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
@endsection


@extends('layout.main')

@section('main_title','الصيدلية')


@section('content')
<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet" >
                            <div class="row">

                                <div class="col-md-5">
                                    <!-- SIDEBAR USERPIC -->

                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name">

                                        </div>
                                    </div>

                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <table class="table table-hover">

                                            <tr>
                                                <td>اسم الصيدلية</td>
                                                <td>{{$pharmacy->name}}</td>
                                            </tr>
                                             <tr>
                                                <td>العنوان </td>
                                                 <td>{{$pharmacy->address}} </td>
                                            </tr>

                                            <tr>
                                                <td>البريد الالكتروني </td>
                                                 <td>{{$pharmacy->email}} </td>
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


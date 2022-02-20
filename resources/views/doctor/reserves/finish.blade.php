@extends('layout.main')
{{-- @section('afterCss') --}}

{{-- @endsection --}}
@section('main_title','الحجوزات ')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green-haze">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>الحجوزات
                </div>

            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                <thead>
                <tr>
                    <th>
                            اسم المريض
                    </th>
                    <th>
                            الجنس
                    </th>
                    <th>
                            العمر
                    </th>
                    <th>
                            العنوان
                    </th>
                    <th>
                            حالة الطلب
                    </th>
                     <th>
                            حالة الفحص
                    </th>

                    <th>
                            الاعدادات
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($reserves as $reserve)
                        <tr>
                            <td>
                                {{$reserve->PaticentName}}
                            </td>
                            <td>
                                {{$reserve->gender}}
                            </td>
                            <td>
                                {{2022 - $reserve->birthDate}}
                            </td>
                            <td>
                                {{$reserve->address}}
                            </td>
                            <td>
                                    @if ($reserve->status == 0 )
                                        لم تبدأ الجلسة
                                    @else
                                        انتهت الجلسة
                                    @endif

                            </td>

                            <td>
                                    @if ($reserve->status_lab == 0 )
                                        لم يتم الفحص
                                    @else
                                        انتهى الفحص
                                    @endif

                            </td>
                            <td>

                                    @if ($reserve->status == 0 )
                                    <a style="width: 150px" href="{{route('reserves.edit',$reserve->id)}}" class="btn btn-icon-only ">
                                        بدء الجلسة
                                    </a>
                                    @else
                                    <a style="width: 150px" href="{{route('reserves.edit',$reserve->id)}}" class="btn btn-icon-only ">
                                        تعديل الجلسة
                                    </a>
                                    @endif




                            </td>
                        </tr>
                    @endforeach

                </tbody>
                </table>
            </div>
        </div>
    <!-- END EXAMPLE TABLE PORTLET-->

@endsection

{{-- @section('afterJs')


   <script src="{{ asset('../../assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="{{ asset('../../assets/global/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('../../assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"
		type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="{{ asset('../../assets/global/plugins/select2/select2.min.js') }}"></script>
	<script type="text/javascript"
		src="{{ asset('../../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript"
		src="{{ asset('../../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
	<script type="text/javascript"
		src="{{ asset('../../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>
	<script type="text/javascript"
		src="{{ asset('../../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}"></script>
	<script type="text/javascript"
		src="{{ asset('../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ asset('../../assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/admin/layout/scripts/demo.js') }}" type="text/javascript"></script>
	<script src="{{ asset('../../assets/admin/pages/scripts/table-advanced.js') }}"></script>

@endsection --}}

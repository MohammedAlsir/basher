@extends('layout.main')
{{-- @section('afterCss') --}}

{{-- @endsection --}}
@section('main_title','الاستشارات ')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green-haze">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>الاستشارات
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
                            الاستشارت
                    </th>
                     <th>
                            الرد على الاستشارة
                    </th>
                    <th>
                            حالة الاستشارة
                    </th>

                    <th>
                            الاعدادات
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($consults as $consult)
                        <tr>
                            <td>
                                {{$consult->patient}}
                            </td>
                            <td>
                                {{$consult->consult}}
                            </td>
                             <td>
                                {{$consult->reply}}
                            </td>

                            <td>
                                    @if ($consult->status == 0 )
                                        لم  يتم الرد
                                    @else
                                        تم الرد
                                    @endif

                            </td>

                            <td>
                                <a style="width: 150px" href="{{route('consult.edit',$consult->id)}}" class="btn btn-icon-only ">
                                    الرد على الاستشارة
                                </a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
                </table>
            </div>
        </div>
    <!-- END EXAMPLE TABLE PORTLET-->

@endsection


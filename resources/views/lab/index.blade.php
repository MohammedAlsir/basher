@extends('layout.main')
@section('main_title','الرئيسية')

@section('content')
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
                            حالة الفخص
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
                                    @if ($reserve->status_lab == 0 )
                                        لم  يتم الفحص
                                    @else
                                        انتهي الفحص
                                    @endif

                            </td>
                            <td>

                                    @if ($reserve->status_lab == 0 )
                                    <a style="width: 150px" href="{{route('checkups.edit',$reserve->id)}}" class="btn btn-icon-only ">
                                        بدء الفحص
                                    </a>
                                    @else
                                    <a style="width: 150px" href="{{route('checkups.edit',$reserve->id)}}" class="btn btn-icon-only ">
                                        تعديل الفحص
                                    </a>
                                    @endif




                            </td>
                        </tr>
                    @endforeach

                </tbody>
                </table>
            </div>
        </div>
@endsection

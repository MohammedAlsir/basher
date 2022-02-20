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
                            حالة الروشيتة
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
                                    @if ($reserve->status_drug == 0 )
                                        لم  يتم صرف الدواء
                                    @else
                                         تم صرف الدواء
                                    @endif

                            </td>
                            <td>

                                    <a style="width: 150px" href="{{route('Pharmacists.show',$reserve->id)}}" class="btn btn-icon-only ">
                                        عرض الروشيته
                                    </a>





                            </td>
                        </tr>
                    @endforeach

                </tbody>
                </table>
            </div>
        </div>
@endsection

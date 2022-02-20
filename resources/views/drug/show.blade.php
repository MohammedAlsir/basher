@extends('layout.main')
@section('main_title','الادوية')

@section('content')

 <div class="portlet box green-haze">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-globe"></i>الروشيته
            </div>

        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_2">
            <thead>
            <tr>
                <th>
                       الادوية
                </th>
                 <th>
                       الاعدادات
                </th>

            </tr>

            </thead>
            <tbody>
                    <tr>
                        <td>
                            {{$reserves->drugs}}
                        </td>
                        <td>

                            @if ($reserves->status_drug == 0)
                                <a style="width: 150px" href="{{route('Pharmacists.edit',$reserves->id)}}" class="btn btn-icon-only ">
                                        صرف الدواء
                                </a>
                            @else
                                <a style="width: 150px" disabled="" class="btn btn-icon-only ">
                                    تم صرف الدواء
                                </a>
                            @endif

                        </td>

                    </tr>


            </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layout.main')
@section('main_title','الجلسات ')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box green-haze">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-globe"></i>الجلسات
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
                        الفحوصات
                </th>
                <th>
                        حالة الطلب
                </th>

            </tr>
            </thead>
            <tbody>
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
                            <a style="width: 100%" href="{{route('reserves.edit',$reserve->id)}}" class="btn btn-icon-only ">
                                عرض الفحوصات
                            </a>

                        </td>
                        <td>
                            @if ($reserve->status == 0 )
                                لم تبدأ الجلسة
                            @else
                                انتهت الجلسة
                            @endif

                        </td>

                    </tr>

            </tbody>
            </table>
        </div>
    </div>

    @if ($reserve->resultexaminations )

     <div class="portlet box green-haze">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-globe"></i>نتيجة الفحص
            </div>

        </div>

        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_2">
            <thead>
            <tr>
                <th>
                         نتيجة الفحص
                </th>
            </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            {{$reserve->resultexaminations}}
                        </td>

                    </tr>

            </tbody>
            </table>
        </div>

    </div>
    @endif
	<!-- END EXAMPLE TABLE PORTLET-->

    <div class="tab-content">
        <div class="tab-pane active" id="tab_0">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>بيانات الجلسة
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="POST" action="{{route('reserves.update',$reserve->id)}}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">حالة المريض</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$reserve->health_status}}" name="health_status" class="form-control input-circle" placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">الفحوصات المطلوبة </label>
                                <div class="col-md-4">
                                    <textarea name="medicalexaminations"   class="form-control input-circle" id="" cols="30" rows="5">{{$reserve->medicalexaminations}}</textarea>


                                    {{-- <input type="text"  name="" class="form-control input-circle" placeholder=""> --}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">الادوية </label>
                                <div class="col-md-4">
                                    <textarea name="drugs" id=""  class="form-control input-circle"  cols="30" rows="5">{{$reserve->drugs}}</textarea>


                                    {{-- <input type="text"  name=""placeholder=""> --}}
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-4">

                                    <div class="form-group form-md-radios">
                                        <label>هل انتهت الجلسة </label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" value="1" {{$reserve->status == 1 ? 'checked': '' }} id="radio6" name="status" class="md-radiobtn">
                                                <label for="radio6">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                                 نعم </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" value="0" {{$reserve->status == 0 ? 'checked': '' }}  id="radio7" name="status" class="md-radiobtn">
                                                <label for="radio7">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                                 لا </label>
                                            </div>

                                        </div>
                                    </div>


                                </div>


                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-circle blue">إضافة </button>
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



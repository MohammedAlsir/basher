@extends('layout.main')
@section('main_title','الفحوصات  ')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box green-haze">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-globe"></i>الفحوصات
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

                    </tr>
                    <tr>
                        <td >الفحوصات المطلوبة</td>
                        <td colspan="3">{{$reserve->medicalexaminations}}</td>
                        {{-- <td ></td> --}}

                    </tr>

            </tbody>
            </table>
        </div>
    </div>
	<!-- END EXAMPLE TABLE PORTLET-->

    <div class="tab-content">
        <div class="tab-pane active" id="tab_0">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>بيانات الفحص
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="POST" action="{{route('checkups.update',$reserve->id)}}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        @csrf
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">نتيجة الفحص</label>
                                <div class="col-md-4">
                                    <textarea name="resultexaminations"   class="form-control input-circle" id="" cols="30" rows="5">{{$reserve->resultexaminations}}</textarea>
                                    {{-- <input type="text"  name="" class="form-control input-circle" placeholder=""> --}}
                                </div>
                            </div>



                             <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-4">

                                    <div class="form-group form-md-radios">
                                        <label>هل انتهت الفحص </label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" value="1" {{$reserve->status_lab == 1 ? 'checked': '' }} id="radio6" name="status_lab" class="md-radiobtn">
                                                <label for="radio6">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                                 نعم </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" value="0" {{$reserve->status_lab == 0 ? 'checked': '' }}  id="radio7" name="status_lab" class="md-radiobtn">
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



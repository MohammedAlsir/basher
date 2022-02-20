@extends('layout.main')
@section('main_title','الرد على الاستشارة ')


@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box green-haze">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-globe"></i>الاستشارة
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

                {{-- <th>
                        الاعدادات
                </th> --}}
            </tr>
            </thead>
            <tbody>
                {{-- @foreach ($consults as $consult) --}}
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

                        {{-- <td>
                            <a style="width: 150px" href="{{route('consult.edit',$consult->id)}}" class="btn btn-icon-only ">
                                الرد على الاستشارة
                            </a>
                        </td> --}}

                    </tr>
                {{-- @endforeach --}}

            </tbody>
            </table>
        </div>
    </div>


    <div class="tab-content">
        <div class="tab-pane active" id="tab_0">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i> الرد على الاستشارة
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="POST" action="{{route('consult.update',$consult->id)}}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">الرد</label>
                                <div class="col-md-4">
                                    <textarea name="reply" class="form-control input-circle" placeholder="الرد">{{$consult->reply}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-circle blue">رد </button>
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



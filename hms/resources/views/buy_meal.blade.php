




@extends('layouts.user')

@section('custom_css')
    <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ URL::to('adminUser') }}">Dashboard</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Buy Meal</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->

    <div class="content">
        <div class="col-md-6">
            <h3 class="page-title"> Buy Meal Form </h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet-body form">


                    {!! Form::open(array('url' => url('/request_for_token'), 'files' => true, 'class'=>'form-horizontal') )  !!}

                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}


                    <div class="form-body">



                        <div class="form-group">
                            <label class="col-md-5 control-label"> Morning Meal Quantity <span class="red">*</span> : </label>
                            <div class="col-md-7">

                                <select name="morning_meal_quantity" class="form-control input-inline input-medium">
                                    <option value="0">0</option>
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>

                                <div class="red">{{ $errors->first('morning_meal_quantity') }}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label"> Launch Meal Quantity <span class="red">*</span> : </label>
                            <div class="col-md-7">

                                <select name="launch_meal_quantity" class="form-control input-inline input-medium">
                                    <option value="0">0</option>
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>

                                <div class="red">{{ $errors->first('launch_meal_quantity') }}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label">Diner Meal Quantity <span class="red">*</span> : </label>
                            <div class="col-md-7">

                                <select name="dinner_meal_quantity" class="form-control input-inline input-medium">
                                    <option value="0">0</option>
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>

                                <div class="red">{{ $errors->first('dinner_meal_quantity') }}</div>
                            </div>
                        </div>





                        <div class="col-md-12">
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-5 col-md-6">
                                        <button type="submit" class="btn green">Request</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE TITLE-->


@stop

@section('custom_js')
    <script src="{{asset('/phq/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/phq/assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>

    <script>

        /*$(document).ready(function(){

           $(document).on('select2:select', '#member_id', function (evt) {
               var member_id = $('#member_id option:selected').attr('data-member-id');


               var url_op = base_url+"/reports/lpc-form";
               $.ajax({
                  type: "POST",
                  url: url_op,
                  dataType: 'json',
                  data: {member_id: member_id, _token: csrf_token},
                  success : function(data){
                       if(data.status){
                           if(true){
                               window.location.href = url;
                           }else{
                               location.reload();
                           }
                     }
                   }

               });
           });

       });*/


        $(function() {
            $( "#date" ).datepicker({dateFormat: 'yy'});
        });

    </script>

@stop







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
                <a href="#">Update Meal Cost</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->

    <div class="content">
        <div class="col-md-6">
            <h3 class="page-title"> Update Meal Cost Form </h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet-body form">



                    {!! Form::open(array('url' => url('/set_meal_cost'), 'files' => true, 'class'=>'form-horizontal') )  !!}

                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}


                    <div class="form-body">








                        <div class="form-group">
                            <label class="col-md-5 control-label"> Morning Meal Cost <span class="red">*</span> : </label>
                            <div class="col-md-7">
                                <input type="text" name="morning_meal_cost" value="@if(!empty($token_sell_option)) {{$token_sell_option->morning_meal_cost}} @endif" class="form-control input-inline input-medium" placeholder="Morning meal cost">
                                <div class="red">{{ $errors->first('morning_meal_cost') }}</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-5 control-label">  Launch Meal Cost <span class="red">*</span> : </label>
                            <div class="col-md-7">
                                <input type="text" name="launch_meal_cost" value=" @if(!empty($token_sell_option)) {{$token_sell_option->launch_meal_cost}} @endif" class="form-control input-inline input-medium" placeholder="Launch meal cost">
                                <div class="red">{{ $errors->first('launch_meal_cost') }}</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-5 control-label"> Dinner Meal Cost <span class="red">*</span> : </label>
                            <div class="col-md-7">
                                <input type="text" name="dinner_meal_cost" value=" @if(!empty($token_sell_option)) {{$token_sell_option->dinner_meal_cost}} @endif" class="form-control input-inline input-medium" placeholder="Dinner meal cost">
                                <div class="red">{{ $errors->first('dinner_meal_cost') }}</div>
                            </div>
                        </div>





                        <div class="col-md-12">
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-5 col-md-6">
                                        <button type="submit" class="btn green">Update Cost</button>
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



        $(function() {
            $( "#date" ).datepicker({dateFormat: 'yy'});
        });

    </script>

@stop


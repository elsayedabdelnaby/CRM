@extends('layouts.app')
@section('title','Areas')
@section('page_name', 'Areas')
@section('content')
@if($form_type == 'insert')
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-pin font-green"></i>
            <span class="caption-subject bold"> Add New Area</span>
        </div>
    </div>
    <div class="portlet-body form">
        {!! Form::model($area, array('route'=>'areas.store', 'role'=>'form', 'novalidate')) !!}
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('name_en', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'english')) !!}
                <label for="form_control_1">English Name</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('country_id', $countries, null, array('class'=>'form-control', 'id'=>'countriesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Country</label>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('name_ar', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'arabic')) !!}
                <label for="form_control_1">Arabic Name</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('governorate_id', $governorates, null, array('class'=>'form-control', 'id'=>'governoratesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Governorate</label>
            </div>
        </div>
        <div class="form-body row">
            <div class="col-md-4"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('city_id', $cities, null, array('class'=>'form-control', 'id'=>'citiesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">City</label>
            </div>
        </div>
        <div class="form-actions noborder">
            <button type="reset" class="btn default pull-right" style="margin-left:9px;">Cancel</button>
            <input type="submit" class="btn blue pull-right submit-button" value="Add">
        </div>
        {!! Form::close() !!}
    </div>
</div>
@elseif($form_type == 'update')
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-pin font-green"></i>
            <span class="caption-subject bold"> Update Area</span>
        </div>
    </div>
    <div class="portlet-body form">
        {!! Form::model($area, array('method'=>'PATCH', 'action'=>['AreasController@update', $area->id],'role'=>'form', 'novalidate')) !!}
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('name_en', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'english')) !!}
                <label for="form_control_1">English Name</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('country_id', $countries, null, array('class'=>'form-control', 'id'=>'countriesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Country</label>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('name_ar', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'arabic')) !!}
                <label for="form_control_1">Arabic Name</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('governorate_id', $governorates, null, array('class'=>'form-control', 'id'=>'governoratesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Governorate</label>
            </div>
        </div>
        <div class="form-body row">
            <div class="col-md-4"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('city_id', $cities, null, array('class'=>'form-control', 'id'=>'citiesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">City</label>
            </div>
        </div>
        <div class="form-actions noborder">
            <button type="reset" class="btn default pull-right" style="margin-left:9px;">Cancel</button>
            <input type="submit" class="btn blue pull-right submit-button" value="Update">
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->

        <!-- END EXAMPLE TABLE PORTLET-->
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Areas </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> English Name </th>
                            <th> Arabic Name </th>
                            <th> Country </th>
                            <th> Governorate </th>
                            <th> City </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($areas as $area)
                        <tr>
                            <td> {{$area->name_en}} </td>
                            <td> {{$area->name_ar}} </td>
                            <td> {{$area->Country->name_en}} </td>
                            <td> {{$area->Governorate->name_en}} </td>
                            <td> {{$area->City->name_en}} </td>
                            <td>
                                <a href="{!! url('/areas')!!}/{{$area->id}}/edit" class="btn btn-outline btn-circle btn-sm purple">
                                    <i class="fa fa-edit"></i> Edit </a>
                                <a href="{!! url('/areas')!!}/{{$area->id}}/destroy" class="btn btn-outline btn-circle dark btn-sm black">
                                    <i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection

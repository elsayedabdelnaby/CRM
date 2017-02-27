@extends('layouts.app')
@section('title','Addresses')
@section('page_name', 'Addresses')
@section('content')
@if($form_type == 'insert')
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-pin font-green"></i>
            <span class="caption-subject bold"> Add New Address</span>
        </div>
    </div>
    <div class="portlet-body form">
        {!! Form::model($address, array('route'=>'addresses.store', 'role'=>'form', 'novalidate')) !!}
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('country_id', $countries, null, array('class'=>'form-control', 'id'=>'countriesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Country</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('street', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required')) !!}
                <label for="form_control_1">Street</label>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('governorate_id', $governorates, null, array('class'=>'form-control', 'id'=>'governoratesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Governorate</label>
            </div>

            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::number('building_no', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'number')) !!}
                <label for="form_control_1">Building NO</label>
            </div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('city_id', $cities, null, array('class'=>'form-control', 'id'=>'citiesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">City</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::number('floor_no', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'number')) !!}
                <label for="form_control_1">Floor NO</label>
            </div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('area_id', $areas, null, array('class'=>'form-control', 'id'=>'areasList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Area</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::number('flat_no', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'number')) !!}
                <label for="form_control_1">Flat NO</label>
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
            <span class="caption-subject bold"> Update Address</span>
        </div>
    </div>
    <div class="portlet-body form">
        {!! Form::model($address, array('method'=>'PATCH', 'action'=>['AddressesController@update', $address->id],'role'=>'form', 'novalidate')) !!}
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('country_id', $countries, null, array('class'=>'form-control', 'id'=>'countriesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Country</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('street', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required')) !!}
                <label for="form_control_1">Street</label>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('governorate_id', $governorates, null, array('class'=>'form-control', 'id'=>'governoratesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Governorate</label>
            </div>

            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::number('building_no', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'number')) !!}
                <label for="form_control_1">Building NO</label>
            </div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('city_id', $cities, null, array('class'=>'form-control', 'id'=>'citiesList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">City</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::number('floor_no', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'number')) !!}
                <label for="form_control_1">Floor NO</label>
            </div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::select('area_id', $areas, null, array('class'=>'form-control', 'id'=>'areasList', 'required')) !!}
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">Area</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::number('flat_no', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'number')) !!}
                <label for="form_control_1">Flat NO</label>
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
                    <i class="fa fa-globe"></i>Addresss </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> Country </th>
                            <th> Governorate </th>
                            <th> City </th>
                            <th> Area </th>
                            <th> Street </th>
                            <th> Building No </th>
                            <th> Floor NO </th>
                            <th> Flat NO </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($addresses as $address)
                        <tr>
                            <td> {{$address->Country->name_en}} </td>
                            <td> {{$address->Governorate->name_en}} </td>
                            <td> {{$address->City->name_en}} </td>
                            <td> {{$address->Area->name_en}} </td>
                            <td> {{$address->street}} </td>
                            <td> {{$address->building_no}} </td>
                            <td> {{$address->floor_no}} </td>
                            <td> {{$address->flat_no}} </td>
                            <td>
                                <a href="{!! url('/addresses')!!}/{{$address->id}}/edit" class="btn btn-outline btn-circle btn-sm purple">
                                    <i class="fa fa-edit"></i> Edit </a>
                                <a href="{!! url('/addresses')!!}/{{$address->id}}/destroy" class="btn btn-outline btn-circle dark btn-sm black">
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

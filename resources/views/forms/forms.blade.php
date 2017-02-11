@extends('layouts.app') 
@section('title','Forms') 
@section('page_name', 'Forms') 
@section('content') 
@if($form_type == 'insert')
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-pin font-green"></i>
            <span class="caption-subject bold"> Add New Form</span>
        </div>
    </div>
    <div class="portlet-body form">
        {!! Form::model($form, array('route'=>'forms.store', 'role'=>'form', 'novalidate')) !!}
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('name_en', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'english')) !!}
                <label for="form_control_1">English Name</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('name_ar', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'arabic')) !!}
                <label for="form_control_1">Arabic Name</label>
            </div>
            <div class="col-md-1"></div>
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
            <span class="caption-subject bold"> Update Form</span>
        </div>
    </div>
    <div class="portlet-body form">
        {!! Form::model($form, array('method'=>'PATCH', 'action'=>['FormsController@update', $form->id],'role'=>'form', 'novalidate')) !!}
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('name_en', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'english')) !!}
                <label for="form_control_1">English Name</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                {!! Form::text('name_ar', null, array('class'=>'form-control', 'id'=>'form_control_1', 'required', 'arabic')) !!}
                <label for="form_control_1">Arabic Name</label>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="form-actions noborder">
            <button class="btn default pull-right" style="margin-left:9px;"><a href="{!! url('/forms') !!}">Cancel</a></button>
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
                    <i class="fa fa-globe"></i>Forms </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> English Name </th>
                            <th> Arabic Name </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($forms as $form)
                        <tr>
                            <td> {{$form->name_en}} </td>
                            <td> {{$form->name_ar}} </td>
                            <td>
                                <a href="{!! url('/forms')!!}/{{$form->id}}/edit" class="btn btn-outline btn-circle btn-sm purple">
                                    <i class="fa fa-edit"></i> Edit </a>
                                <a href="{!! url('/forms')!!}/{{$form->id}}/destroy" class="btn btn-outline btn-circle dark btn-sm black">
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
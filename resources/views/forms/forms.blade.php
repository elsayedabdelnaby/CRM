@extends('layouts.app')
@section('title','Forms')
@section('page_name', 'Forms')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold">Form Data</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                {!! Form::open(array('route'=>'forms.store','files'=>true, 'id'=>'form_sample_2', 'novalidate'=>'novalidate')) !!}
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input">
                                {!! Form::text('name_en', null, array('class'=>'form-control english-validation', 'id'=>'form_control_1', 'placeholder'=>'Enter english name')) !!}
                                @if (isset($errors[0]))
                                <span id="form_control_1-error" class="help-block help-block-error" style="color: red;">This field is required.</span>
                                @endif
                                <label for="form_control_1">English Name
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <span class="help-block">Enter english name...</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input">
                                {!! Form::text('name_ar', null, array('id'=>'form_control_1', 'class'=>'form-control arabic-validation', 'placeholder'=>'Enter arabic name')) !!}
                                @if(isset($errors[1]))
                                <span id="form_control_1-error" class="help-block help-block-error" style="color: red;">This field is required.</span>
                                @endif
                                <label for="form_control_1">Arabic Name
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <span class="help-block">Enter arabic name...</span>
                            </div>
                        </div>
                    </div>
                    <!--div class="form-group form-md-line-input">
                        <input type="text" class="form-control" id="form_control_1" name="email" placeholder="Enter your email">
                        <label for="form_control_1">Email
                            <span class="required" aria-required="true">*</span>
                        </label>
                        <span class="help-block">Please enter your email...</span>
                    </div>
                    <div class="form-group form-md-line-input">
                        <input type="text" class="form-control" id="form_control_1" name="url" placeholder="Enter URL">
                        <label for="form_control_1">URL</label>
                    </div>
                    <div class="form-group form-md-line-input">
                        <input type="text" class="form-control" id="form_control_1" name="number" placeholder="Enter number">
                        <label for="form_control_1">Number</label>
                    </div>
                    <div class="form-group form-md-line-input">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="text" class="form-control" name="digits" placeholder="Enter digits">
                            <label for="form_control_1">Digits</label>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <div class="input-group">
                            <input type="text" class="form-control" name="email2" placeholder="Enter your email">
                            <label for="form_control_1">Email</label>
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <div class="input-group">
                            <div class="input-group-control">
                                <input type="text" class="form-control" name="number2" placeholder="Placeholder">
                                <label for="form_control_1">Enter your number</label>
                            </div>
                            <span class="input-group-btn btn-right">
                                <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="javascript:;">Action</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;">Separated link</a>
                                    </li>
                                </ul>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <select class="form-control" name="delivery">
                            <option value="">Select</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label for="form_control_1">Warning State</label>
                        <span class="help-block">Some help goes here...</span>
                    </div>
                    <div class="form-group form-md-line-input">
                        <textarea class="form-control" name="memo" rows="3"></textarea>
                        <label for="form_control_1">Memo</label>
                        <span class="help-block">Some help goes here...</span>
                    </div>
                    <div class="form-group form-md-checkboxes">
                        <label for="form_control_1">Checkboxes</label>
                        <div class="md-checkbox-list">
                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox2_1" name="checkboxes1[]" value="1" class="md-check">
                                <label for="checkbox2_1">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 1 </label>
                            </div>
                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox2_2" name="checkboxes1[]" value="1" class="md-check">
                                <label for="checkbox2_2">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 2 </label>
                            </div>
                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox2_3" name="checkboxes1[]" value="1" class="md-check">
                                <label for="checkbox2_3">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 3 </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-md-checkboxes">
                        <label for="form_control_1">Checkboxes</label>
                        <div class="md-checkbox-inline">
                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox2_4" name="checkboxes2[]" value="1" class="md-check">
                                <label for="checkbox2_4">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 1 </label>
                            </div>
                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox2_5" name="checkboxes2[]" value="1" class="md-check">
                                <label for="checkbox2_5">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 2 </label>
                            </div>
                            <div class="md-checkbox">
                                <input type="checkbox" id="checkbox2_6" name="checkboxes2[]" value="1" class="md-check">
                                <label for="checkbox2_6">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 3 </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-md-radios">
                        <label for="form_control_1">Radios</label>
                        <div class="md-radio-list">
                            <div class="md-radio">
                                <input type="radio" id="checkbox112_6" name="radio1" value="1" class="md-radiobtn">
                                <label for="checkbox112_6">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 1 </label>
                            </div>
                            <div class="md-radio">
                                <input type="radio" id="checkbox112_7" name="radio1" value="2" class="md-radiobtn">
                                <label for="checkbox112_7">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 2 </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-md-radios">
                        <label for="form_control_1">Radios</label>
                        <div class="md-radio-inline">
                            <div class="md-radio">
                                <input type="radio" id="checkbox2_8" name="radio2" value="121" class="md-radiobtn">
                                <label for="checkbox2_8">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 1 </label>
                            </div>
                            <div class="md-radio">
                                <input type="radio" id="checkbox2_9" name="radio2" value="112" class="md-radiobtn">
                                <label for="checkbox2_9">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 2 </label>
                            </div>
                            <div class="md-radio">
                                <input type="radio" id="checkbox2_10" name="radio2" value="112" class="md-radiobtn">
                                <label for="checkbox2_10">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Option 3 </label>
                            </div>
                        </div>
                    </div>
                </div-->
                    <div class="row">
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="btn green" type="submit" value="Insert">
                                    <button type="reset" class="btn default">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <form>
                        <input type="hidden">
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
    @endsection

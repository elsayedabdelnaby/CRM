<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form_type  = 'insert';
        $forms      = Form::all();
        return view('forms.forms', compact('form_type', 'forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_type        = 'insert';
        $input            = $request->all();
        $input['name_en'] = $input['english_name'];
        $input['name_ar'] = $input['arabic_name'];
        Form::create($input);
        $forms      = Form::all();
        $form_type  = 'insert';
        return view('forms.forms', compact('form_type', 'forms'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form_type  = 'update';
        $form       = Form::findOrFail($id);
        $forms      = Form::all();
        return view('forms.forms', compact('form_type', 'forms', 'form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form_type  = 'insert';
        $forms      = Form::all();
        return view('forms.forms', compact('form_type', 'forms'));
    }
}

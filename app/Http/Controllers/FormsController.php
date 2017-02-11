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
        $form       = array();
        return view('forms.forms', compact('form_type', 'forms', 'form'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/forms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input            = $request->all();
        Form::create($input);
        flash()->overlay("Form Created successfully", 'Create');
        return redirect('/forms');
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
        $forms      = Form::all();
        try {
            $form   = Form::findOrFail($id);
        } catch (\Exception $e) {
            $e->getMessage();
            return redirect()->back();
        }
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
        try {
            $x = 12/0;
            Form::findOrFail($id)->delete();
            flash()->overlay("Form deleted successfully", 'Delete');
            return redirect('/forms');
        } catch(\Exception $ex) {
            return redirect('/forms')->with("error-message", "Delete Exception is " . $ex->getMessage());
        }
    }
}

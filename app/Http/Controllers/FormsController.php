<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $errors = array();
        $action = "insert";
        $forms = Form::all();
        return view('forms.forms', compact('errors', 'action', 'forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $action = "insert";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $errors = array();
        $input = $request->all();

        $name_en = $input['name_en'];
        $name_ar = $input['name_ar'];
//        $isArabic = "/^([\0-\9]|[\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd]|[ ])*$/g";
//        if (empty($name_en)) {
//            $errors[0] = "This field is required";
//        } elseif(preg_match($isArabic, $name_en)) {
//            $errors[0] = "Must be english letters";
//        }
//        if (empty($name_ar)) {
//            $errors[1] = "This field is required";
//        } elseif (!preg_match($isArabic, $name_ar)) {
//            $errors[1] = "Must be arabic letters";
//        }
        if (empty($errors)) {
            try {
                Form::create($input);
                session()->flash('creation_successfully', 'Form Created Successfully');
                return redirect('/forms');
            } catch (\Exception $ex) {
                return redirect('/forms')->with(['creation_exception' => $ex->getMessage()]);
            }
        } else {
            return view('forms.forms', compact('errors'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $action = "update";
        $errors = array();
        $form = Form::findOrFail($id);
        $forms = Form::all();
        return view('forms.forms', compact('action', 'form', 'forms', 'errors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $action = "insert";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $action = "insert";
    }

}

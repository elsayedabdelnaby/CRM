<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form_type  = 'insert';
        $modules    = Module::all();
        $module     = array();
        return view('modules.modules', compact('form_type', 'modules', 'module'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/modules');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Module::create($input);
        flash()->overlay("Module Created successfully", 'Create');
        return redirect('/modules');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $module = Module::findOrFail($id);
            return redirect('/modules/' . $id . '/edit');
        } catch(\Exception $ex) {
            return redirect('/modules')->with('error-message', "Show Exception is " . $ex->getMessage());
        }
    }

}
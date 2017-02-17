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
}
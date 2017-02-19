<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form_type  = 'insert';
        $countries      = Country::all();
        $country       = array();
        return view('addresses.countries', compact('form_type', 'countries', 'country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/countries');
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
        Country::create($input);
        flash()->overlay("Country Created successfully", 'Create');
        return redirect('/countries');
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
            $country = Country::findOrFail($id);
            return redirect('/countries/' . $id . '/edit');
        } catch (\Exception $ex) {
            return redirect('/countries')->with('error-message', "Show Exception is " . $ex->getMessage());
        }
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
        $countries  = Country::all();
        try {
            $country   = Country::findOrFail($id);
        } catch (\Exception $e) {
            $e->getMessage();
            return redirect('/countries')->with('error-message', 'Edit Exception is' . $e->getMessage());
        }
        return view('addresses.countries', compact('form_type', 'countries', 'country'));
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
        try {
            $input = $request->all();
            Country::findOrFail($id)->update($input);
            flash()->overlay("Country updated successfully", 'Update');
            return redirect('/countries');
        } catch (\Exception $ex) {
            return redirect('/countries/' . $id . '/edit')->with("error-message", "Update Exception is " . $ex->getMessage());
        }
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
            Country::findOrFail($id)->delete();
            flash()->overlay("Country deleted successfully", 'Delete');
            return redirect('/countries');
        } catch (\Exception $ex) {
            return redirect('/countries')->with("error-message", "Delete Exception is " . $ex->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Governorate;
use App\City;

class CitiesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $form_type      = 'insert';
        $countries      = Country::pluck('name_en', 'id');
        $governorates   = Governorate::pluck('name_en', 'id');
        $city           = array();
        $cities         = City::where('id', '<>', 0)->get();
        return view('addresses.cities', compact('form_type', 'countries', 'governorates', 'city', 'cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return redirect('/cities');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        City::create($input);
        flash()->overlay('City Created Successfuly', 'Create');
        return redirect('/cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        try {
            $city = Governorate::findOrFail($id);
            return redirect('/city/' . $id . '/edit');
        } catch (\Exception $ex) {
            return redirect('/city')->with('error-message', "Show Exception is " . $ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $form_type  = 'update';
        $countries  = Country::pluck('name_en', 'id');
        $cities     = City::where('id', '<>', 0)->get();
        try {
            $city         = City::findOrFail($id);
            $governorates = Governorate::where('country_id', $city->country_id)
                    ->pluck('name_en', 'id');
        } catch (\Exception $e) {
            $e->getMessage();
            return redirect('/cities')->with('error-message', 'Edit Exception is' . $e->getMessage());
        }
        return view('addresses.cities', compact('form_type', 'countries', 'governorates', 'cities', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        try {
            $input = $request->all();
            City::findOrFail($id)->update($input);
            flash()->overlay("City updated successfully", 'Update');
            return redirect('/cities');
        } catch (\Exception $ex) {
            return redirect('/cities/' . $id . '/edit')->with("error-message", "Update Exception is " . $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        try {
            City::findOrFail($id)->delete();
            flash()->overlay("City deleted successfully", 'Delete');
            return redirect('/cities');
        } catch (\Exception $ex) {
            return redirect('/cities')->with("error-message", "Delete Exception is " . $ex->getMessage());
        }
    }

}

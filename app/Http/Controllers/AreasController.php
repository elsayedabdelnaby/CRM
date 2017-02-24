<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Governorate;
use App\City;
use App\Area;

class AreasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $form_type      = 'insert';
        $countries      = Country::pluck('name_en', 'id');
        $governorates   = Governorate::pluck('name_en', 'id');
        $cities         = City::pluck('name_en', 'id');
        $area           = array();
        $areas          = Area::where('id', '<>', 0)->get();
        return view('addresses.areas', compact('form_type', 'countries', 'governorates', 'cities', 'areas', 'area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return redirect('/areas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        Area::create($input);
        flash()->overlay('Area Created Successfuly', 'Create');
        return redirect('/areas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        try {
            $area = Area::findOrFail($id);
            return redirect('/areas/' . $id . '/edit');
        } catch (\Exception $ex) {
            return redirect('/areas')->with('error-message', "Show Exception is " . $ex->getMessage());
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
        $areas      = Area::where('id', '<>', 0)->get();
        try {
            $area           = Area::findOrFail($id);
            $governorates   = Governorate::where('country_id', $area->country_id)
                    ->pluck('name_en', 'id');
            $cities         = City::where('governorate_id', $area->governorate_id)
                    ->pluck('name_en', 'id');
        } catch (\Exception $e) {
            $e->getMessage();
            return redirect('/areas')->with('error-message', 'Edit Exception is' . $e->getMessage());
        }
        return view('addresses.areas', compact('form_type', 'countries', 'governorates', 'cities', 'areas', 'area'));
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
            Area::findOrFail($id)->update($input);
            flash()->overlay("Area updated successfully", 'Update');
            return redirect('/areas');
        } catch (\Exception $ex) {
            return redirect('/areas/' . $id . '/edit')->with("error-message", "Update Exception is " . $ex->getMessage());
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
            Area::findOrFail($id)->delete();
            flash()->overlay("Area deleted successfully", 'Delete');
            return redirect('/areas');
        } catch (\Exception $ex) {
            return redirect('/areas')->with("error-message", "Delete Exception is " . $ex->getMessage());
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Governorate;
use App\City;
use App\Area;
use App\Address;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form_type      = 'insert';
        $countries      = Country::pluck('name_en', 'id');
        $governorates   = Governorate::pluck('name_en', 'id');
        $cities         = City::pluck('name_en', 'id');
        $areas          = Area::pluck('name_en', 'id');
        $address        = array();
        $addresses      = Address::where('id', '<>', 0)->get();
        return view('addresses.addresses', compact('form_type', 'countries', 'governorates', 'cities', 'areas', 'addresses', 'address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/addresses');
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
        Address::create($input);
        flash()->overlay('Address Created Successfuly', 'Create');
        return redirect('/addresses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        try {
            $address = Address::findOrFail($id);
            return redirect('/addresses/' . $id . '/edit');
        } catch (\Exception $ex) {
            return redirect('/addresses')->with('error-message', "Show Exception is " . $ex->getMessage());
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
        $addresses      = Address::where('id', '<>', 0)->get();
        try {
            $address        = Address::findOrFail($id);
            $governorates   = Governorate::where('country_id', $address->country_id)
                    ->pluck('name_en', 'id');
            $cities         = City::where('governorate_id', $address->governorate_id)
                    ->pluck('name_en', 'id');
            $areas          = Area::where('city_id', $address->city_id)
                    ->pluck('name_en', 'id');
        } catch (\Exception $e) {
            $e->getMessage();
            return redirect('/addresses')->with('error-message', 'Edit Exception is' . $e->getMessage());
        }
        return view('addresses.addresses', compact('form_type', 'countries', 'governorates', 'cities', 'areas', 'addresses', 'address'));
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
            Address::findOrFail($id)->update($input);
            flash()->overlay("Address updated successfully", 'Update');
            return redirect('/addresses');
        } catch (\Exception $ex) {
            return redirect('/addresses/' . $id . '/edit')->with("error-message", "Update Exception is " . $ex->getMessage());
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
            Address::findOrFail($id)->delete();
            flash()->overlay("Address deleted successfully", 'Delete');
            return redirect('/addresses');
        } catch (\Exception $ex) {
            return redirect('/addresses')->with("error-message", "Delete Exception is " . $ex->getMessage());
        }
    }
}

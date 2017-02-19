<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Governorate;

class GovernoratesController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $form_type     = 'insert';
      $governorates  = Governorate::all();
      $countries     = Country::pluck('name_en', 'id');
      $governorate   = array();
      return view('addresses.governorates', compact('form_type', 'governorates', 'governorate', 'countries'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return redirect('/governorates');
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
      Governorate::create($input);
      flash()->overlay("Governorate Created successfully", 'Create');
      return redirect('/governorates');
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
          $governorate = Governorate::findOrFail($id);
          return redirect('/governorates/' . $id . '/edit');
      } catch (\Exception $ex) {
          return redirect('/governorates')->with('error-message', "Show Exception is " . $ex->getMessage());
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
      $form_type     = 'update';
      $governorates  = Governorate::all();
      $countries     = Country::pluck('name_en', 'id');
      try {
          $governorate   = Governorate::findOrFail($id);
      } catch (\Exception $e) {
          $e->getMessage();
          return redirect('/governorates')->with('error-message', 'Edit Exception is' . $e->getMessage());
      }
      return view('addresses.governorates', compact('form_type', 'governorates', 'governorate', 'countries'));
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
          Governorate::findOrFail($id)->update($input);
          flash()->overlay("Governorate updated successfully", 'Update');
          return redirect('/governorates');
      } catch (\Exception $ex) {
          return redirect('/governorates/' . $id . '/edit')->with("error-message", "Update Exception is " . $ex->getMessage());
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
          Governorate::findOrFail($id)->delete();
          flash()->overlay("Governorate deleted successfully", 'Delete');
          return redirect('/governorates');
      } catch (\Exception $ex) {
          return redirect('/governorates')->with("error-message", "Delete Exception is " . $ex->getMessage());
      }
  }
}

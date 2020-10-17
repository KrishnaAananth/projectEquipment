<?php

namespace App\Http\Controllers\Resource_Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Equipment;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
        'e-name' => 'required', 
        'e-available' => 'required', 
        'e-renting' => 'required',
        'equipment-img' => 'required'
        ]);

        $equipment = new Equipment;

        $equipment->Name = $request->input('e-name');
        $equipment->Available_Number = $request->input('e-available');
        $equipment->Renting_Price_Per_Day = $request->input('e-renting');
        $equipment->Equipment_Provider_ID = Auth::id();
        
        $file = $request->file('equipment-img');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        
        $equipment_path = '/assets/images/Equipments/'. $filename ;
        $equipment->Equipment_Image_Path = $equipment_path;
        
        $file->move('assets/images/Equipments/', $filename);
        
        $equipment->Equipment_Image = $filename;

        $equipment->save();

        return redirect()->back()->with('success', 'New Equipment has been Imported');
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
        $equipment = Equipment::find($id);
        return view('equipment_provider.equipment_provider-edit-equipments')->with(['equipment' => $equipment]);
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
        $this->validate($request, [
        'name' => 'required', 
        'available_No' => 'required',
        'renting' => 'required'
        ]);

        $equipment_update = Equipment::find($id);

        $equipment_update->Name = $request->input('name');
        $equipment_update->Available_Number = $request->input('available_No');
        $equipment_update->Renting_Price_Per_Day = $request->input('renting');
        
        $equipment_update->save();

        return redirect()->back()->with('success', 'Equipment Information have been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipment_delete = Equipment::find($id)->delete();;

        return redirect()->back()->with('success', 'Equipment has been Deleted');
    }
}

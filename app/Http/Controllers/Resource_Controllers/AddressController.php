<?php

namespace App\Http\Controllers\Resource_Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;

class AddressController extends Controller
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
        //
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
        //
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
        'a-no' => 'required', 
        'a-stad' => 'required',
        'a-district' => 'required',
        'a-province' => 'required'
        ]);

        $address = User::find($id);

        $address->Address_No = $request->input('a-no');
        $address->Street_Address = $request->input('a-stad');
        $address->District = $request->input('a-district');
        $address->Province = $request->input('a-province');
        
        $address->save();

        return redirect()->back()->with('success', 'Address Informations have been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

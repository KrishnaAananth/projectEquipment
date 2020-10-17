<?php

namespace App\Http\Controllers\Resource_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class ContactController extends Controller
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
        'u-name' => 'required',
        'u-uname' => 'required', 
        'u-email' => 'required',
        'u-pno' => 'required',
        'profile-img' => 'required'
        ]);

        $contact = User::find($id);

        $contact->Name = $request->input('u-name');
        $contact->Username = $request->input('u-uname');
        $contact->Email = $request->input('u-email');
        $contact->Mobile = $request->input('u-pno');

        $file = $request->file('profile-img');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        
        $profile_image_path = '/assets/images/Equipment Providers/'. $filename ;
        $contact->Profile_Image_Path = $profile_image_path;
        
        $file->move('assets/images/Equipment Providers/', $filename);
        
        $contact->Profile_Image = $filename;
        
        $contact->save();

        return redirect()->back()->with('success', 'Contact Information have been Updated');
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

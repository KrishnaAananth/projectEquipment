<?php

namespace App\Http\Controllers\Plain_Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

use App\Equipment;

class CustomerController extends Controller
{
    public function profile()
    {
        return view('equipment_provider.equipment_provider');
    }

    //Function to load the Customer Profile Contact Information Page
    public function myProfileContactInformation($id)
    {
        $contact = User::find($id);

        return view('equipment_provider.equipment_provider-profile-contact-information')->with(['contact' => $contact]);
    }

    //Function to load the Customer Profile Address Book Page
    public function myProfileAddressBook($id)
    {
        $address = User::find($id);
        
        return view('equipment_provider.equipment_provider-profile-address-book')->with(['address' => $address]);
    }

    //Function to load the Customer Profile Equipments Page
    public function myProfileEquipments($id)
    {
        $equipment_selected = Equipment::where('Equipment_Provider_ID', $id)->select('*')->get(0);
        return view('equipment_provider.equipment_provider-equipments')->with(['Equipments' => $equipment_selected]);
    }

    
}

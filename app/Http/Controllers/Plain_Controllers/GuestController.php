<?php

namespace App\Http\Controllers\Plain_Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $Equipment_Selected = DB::table('equipment')->orderBy('Equipment_ID','DESC')->select('*')->get();
        $Equipment_Provider_Selected = DB::table('users')->where([['Is_Equipment_Provider', '=', 1], ['Is_Deactivated', '=', 0]])->select('*')->get();
        return view('index') -> with(['Equipment_Selected' => $Equipment_Selected, 'Equipment_Provider_Selected' => $Equipment_Provider_Selected]);
    }


}

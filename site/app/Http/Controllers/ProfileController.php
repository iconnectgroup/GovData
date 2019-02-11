<?php

namespace App\Http\Controllers;
use App\Profile;
use App\Naics;
use DB;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) 
    {

        $naics_id = $request['naics'] + 1;
        $naics = DB::select('SELECT naics FROM naics where id =' . $naics_id);
        
        $naics_code = $naics[0]->naics;
        if ($naics) {
            $lists = DB::select('SELECT * FROM profiles WHERE naics = ' . $naics_code);
            
        } else {
            $lists = [];
        }
        return view('datatable.profile', compact('lists'));
    }
}

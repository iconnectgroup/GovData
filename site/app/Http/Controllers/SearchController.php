<?php

namespace App\Http\Controllers;
use App\Naics;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class SearchController extends Controller
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

    public function index() 
    {
        $naics_data = DB::select('SELECT naics FROM naics');
        $naicses = [];
        foreach($naics_data as $data) {
            $naics = $data->naics;
            array_push($naicses, $naics);
        }
        
        return view("search.index", compact('naicses'));
    }
}

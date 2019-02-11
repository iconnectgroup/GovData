<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\State;
use App\Economic;
use DB;

use Illuminate\Http\Request;

class EconomicController extends Controller
{
    public function index(Request $request)
    {
        $state_id = $request['state'] + 1;
        $state = DB::select('SELECT state FROM states WHERE id = ' . $state_id);
        $state = $state[0]->state;
        $naics_code = $request['naics'];
        $naics = DB::select('SELECT id FROM naics WHERE naics = ' . $request['naics']);
        $naics_id = $naics[0]->id;
        $economs = DB::select('SELECT * FROM economic WHERE naics_id = ' . $naics_id . ' AND state = "' . $state . '"');
        
        // \DataTables::model(new Economic)->searchable('economic_group')->get();
        return view("datatable.economic",compact('economs', 'state', 'naics_code'));
    }
}

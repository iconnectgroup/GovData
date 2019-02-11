<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\State;
use App\Profile;
use DB;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        //when the datatables makes a request to the same route/method the package will catch this.
        // $state = DB::select('SELECT state FROM states WHERE id = 2');
        // print_r($state[0]->state);
        \DataTables::model(new Profile)->get();
        return view("datatable.index");
    }
}

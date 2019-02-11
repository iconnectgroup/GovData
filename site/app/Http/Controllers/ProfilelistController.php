<?php

namespace App\Http\Controllers;
use App\Profilelist;
use DB;

use Illuminate\Http\Request;

class ProfilelistController extends Controller
{
    public function index(Request $request)
    {
        $econom_id = $request['econom_id'];
        $list = DB::select('SELECT * from profilelists WHERE economic_id = ' . $econom_id);
        return view("datatable.profilelist", compact('list'));
    }
}

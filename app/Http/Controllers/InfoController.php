<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InfoController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM info");

        return view('admin.info.index',compact('r'));
    }
}

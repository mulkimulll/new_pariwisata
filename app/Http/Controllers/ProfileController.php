<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class ProfileController extends Controller
{
    //

    public function index()
    {
        $r = DB::select("SELECT * FROM users where id=?",[Auth::user()->id])[0];
        // $g = DB::select("SELECT * FROM galeri where nama_wisata=?",[$id]);
        
        return view('admin.profile',compact('r'));
    }
}

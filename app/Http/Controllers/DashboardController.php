<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $r = DB::SELECT("SELECT
        (SELECT count(*) FROM wisata) wisata,
        (SELECT count(*) FROM kategori) kategori,
        (SELECT count(*) FROM transportasi) transportasi,
        (SELECT count(*) FROM event) event")[0];

        return view('admin.dashboard',compact('r'));
    }
}

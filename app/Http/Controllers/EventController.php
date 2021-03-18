<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use DB;
use Input;
use Image;
use Auth;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM event");

        return view('admin.event.index',compact('r'));
    }

    public function index_event()
    {
        $r = DB::select("SELECT * FROM event");

        return view('admin.event.index_user',compact('r'));
    }

    public function dtl_event()
    {
        $r = DB::select("SELECT * FROM event")[0];

        return view('admin.event.dtl',compact('r'));
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new event;
            $m->nama = $data['nama'];
            $m->isi = $data['isi'];
            $m->tgl_mulai = Carbon::parse($data['tgl_mulai'])->format('Y/m/d');
            $m->tgl_selesai = Carbon::parse($data['tgl_selesai'])->format('Y/m/d');
            $m->create_user = Auth::user()->name;
            $m->save();
            return redirect('/event')->with('message','data berhasil di simpan');
         }
    }

    
}

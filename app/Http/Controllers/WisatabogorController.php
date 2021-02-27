<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boking_jelajah;
use DB;
use Input;
use Image;
use Auth;
use Carbon\Carbon;

class WisatabogorController extends Controller
{
    public function index()
    {
        return view('front.jelajah');
    }

    // kuliner
    public function index_kuliner()
    {
        $kuliner = DB::SELECT("SELECT * FROM wisata where kategori=2 ");
        return view('front.kuliner',compact('kuliner'));
    }

    public function dtl_kuliner($id=null)
    {
        $kuliner = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
        return view('front.kuliner-dtl',compact('kuliner'));
    }

    // pendakian
    public function index_pendakian()
    {
        $pendakian = DB::SELECT("SELECT * FROM wisata where idsub=1 and kategori=1 ");
        return view('front.pendakian',compact('pendakian'));
    }

    public function dtl_pendakian($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
        return view('front.pendakian-dtl',compact('r'));
    }
    
    public function booking_pendakian($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
        return view('front.pendakian-booking',compact('r'));
    }

    public function boking_jelajah(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new boking_jelajah;
            $m->nama_wisata = $data['nama_wisata'];
            $m->tgl_booking = Carbon::parse($data['tgl_booking'])->format('Y/m/d');
            $m->kuota = $data['kuota'];
            $m->create_user = Auth::user()->name;
            $m->save();
            return redirect()->back()->with('message','Boking wisata sedang di proses');
         }
    }

    // belanja
    public function index_belanja()
    {
        $belanja = DB::SELECT("SELECT * FROM wisata where kategori=4 ");
        return view('front.belanja',compact('belanja'));
    }

    public function dtl_belanja($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
        return view('front.belanja-dtl',compact('r'));
    }
}

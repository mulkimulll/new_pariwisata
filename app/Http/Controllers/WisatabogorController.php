<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boking;
use App\Models\Notif;
use DB;
use Input;
use Image;
use Auth;
use Carbon\Carbon;
use App\Mail\AyopariwisataEmail;
use Illuminate\Support\Facades\Mail;

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

    public function index_bioskop()
    {
        $bioskop = DB::SELECT("SELECT * FROM wisata where idsub=9 and kategori=3 ");
        return view('front.bioskop',compact('bioskop'));
    }
    
    public function index_bermain()
    {
        $bermain = DB::SELECT("SELECT * FROM wisata where idsub=10 and kategori=3 ");
        return view('front.bermain',compact('bermain'));
    }
    
    public function index_zoo()
    {
        $zoo = DB::SELECT("SELECT * FROM wisata where idsub=11 and kategori=3 ");
        return view('front.zoo',compact('zoo'));
    }
    
    public function index_hutan()
    {
        $hutan = DB::SELECT("SELECT * FROM wisata where idsub=6 and kategori=1 ");
        return view('front.hutan',compact('hutan'));
    }
    
    public function index_pantai()
    {
        $pantai = DB::SELECT("SELECT * FROM wisata where idsub=7 and kategori=1 ");
        return view('front.pantai',compact('pantai'));
    }
    
    public function index_lembah()
    {
        $lembah = DB::SELECT("SELECT * FROM wisata where idsub=8 and kategori=1 ");
        return view('front.lembah',compact('lembah'));
    }

    public function dtl_pendakian($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
        return view('front.pendakian-dtl',compact('r'));
    }
    
    public function booking_pendakian($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        $a = Auth::user();
        
        return view('front.pendakian-booking',compact('r','a'));
    }

    public function boking_jelajah(Request $request)
    {        
        $email_partner = DB::select("SELECT 
                            *
                        FROM
                            wisata a
                                LEFT JOIN
                            users b ON a.id_partner = b.id")[0];

        if($request->isMethod('post')){
            $data = $request->all();
            $m = new Boking;
            $m->id_wisata = $data['id_wisata'];
            $m->id_partner = $data['id_partner'];
            $m->nama_wisata = $data['nama_wisata'];
            $m->tgl_booking = Carbon::parse($data['tgl_booking'])->format('Y/m/d');
            $m->kuota = $data['kuota'];
            $m->nama_user = Auth::user()->name;
            $m->id_user = Auth::user()->id;
            $m->email_user = Auth::user()->email;
            $m->save();
            
            $notif = new notif;
            $notif->id_user = Auth::user()->id;
            $notif->isi = 'Menunggu balasan partner';
            $notif->save();

            Mail::to($email_partner->email)->send(new AyopariwisataEmail());
            return redirect()->back()->with('message','Boking wisata sedang di proses, Partner akan segera mengirimkan verifikasi ke email anda ');
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

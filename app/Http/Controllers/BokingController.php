<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Boking;
use App\Models\Notif;
use App\Models\History_boking;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AyopariwisataEmail_partner;

class BokingController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM boking where konfirmasi=0 ORDER BY created_at DESC");
        $h = DB::select("SELECT * FROM boking where konfirmasi=1");

        return view('admin.boking.index',compact('r','h'));
    }

    public function approve($id=null)
    {   
        boking::where(['id'=>$id])->update(['status'=>'Boking Telah Setujui Partner','konfirmasi'=>'1']);

        $r = DB::select("SELECT * FROM boking where id=?",[$id])[0];
            
        $notif = new notif;
        $notif->id_user = $r->id_user;
        $notif->id_wisata = $r->id_wisata;
        $notif->isi = 'Pemesanan untuk wisata ' . $r->nama_wisata .' pada tanggal '. $r->tgl_booking .' untuk '.$r->kuota . ' orang telah di konfirmasi';
        $notif->save();
        
        Mail::to($r->email_user)->send(new AyopariwisataEmail_partner());
        return redirect('/admin-boking')->with('message','bokingan berhasil di approve');
    }

    public function reject($id=null)
    {        
        boking::where(['id'=>$id])->update(['status'=>'Boking dibatalkan oleh partner']);
        $r = DB::select("SELECT * FROM boking where id=?",[$id])[0];
        $notif = new notif;
        $notif->id_user = $r->id_user;
        $notif->id_wisata = $r->id_wisata;
        $notif->isi = 'Pemesanan untuk wisata ' . $r->nama_wisata .' pada tanggal '. $r->tgl_booking .' untuk '.$r->kuota . ' orang telah di batalkan';
        $notif->save();

        Mail::to($r->email_user)->send(new AyopariwisataEmail_partner());
        return redirect('/admin-boking')->with('message','bokingan berhasil di reject');
    }

}

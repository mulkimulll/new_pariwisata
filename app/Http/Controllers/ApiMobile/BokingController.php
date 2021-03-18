<?php

namespace App\Http\Controllers\ApiMobile;

use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Boking;
use App\Models\Notif;
use App\Models\History_boking;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AyopariwisataEmail_partner;
use App\Mail\AyopariwisataEmail;

use App\Helpers\Helper;

class BokingController extends Controller
{
    use Helpers;
    public $successStatus = 200;
    
    public function index(Request $request, $id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];

        if($request->isMethod('post')){
            $data = $request->all();
            $m = new Boking;
            $m->id_wisata = $r->id;
            $m->id_partner = $r->id_partner;
            $m->nama_wisata = $r->nama_wisata;
            $m->tgl_booking = $data['tgl_booking'];
            $m->kuota = $data['kuota'];
            $m->nama_user = $data['nama_user'];
            $m->id_user = $data['id_user'];
            $m->email_user = $data['email_user'];
            $m->save();

            $notif = new notif;
            $notif->id_user = Auth::user()->id;
            $notif->isi = 'Menunggu balasan partner';
            $notif->save();

            $message_body = "Pemesanan wisata " . $m->nama_wisata . " untuk " . $m->kuota . " orang, pada tanggal " . $m->tgl_booking . " sedang di proses.";

            Mail::to($m->email_user)->send(new AyopariwisataEmail());

            // ngirim push notification
            Helper::send_notif($m->id_user, $message_body);
            
            return response()->json([
                'success' => true,
                'message' => 'Boking wisata sedang di proses, Partner akan segera mengirimkan verifikasi ke email anda',
            ], 200);
         }
    }

    public function history($id=null)
    {
        $w = DB::select("SELECT * FROM boking where id_user=? ORDER BY created_at DESC",[$id]);

        return response()->json(['success' => $w], $this->successStatus);
    }

    public function notif($id=null)
    {
        $w = DB::select("SELECT * FROM notif where id_user=? ORDER BY created_at DESC",[$id]);

        return response()->json([
            'success' => true,
            'data' => $w,
        ], 200);
    }
}

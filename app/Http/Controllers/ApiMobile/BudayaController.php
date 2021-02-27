<?php

namespace App\Http\Controllers\ApiMobile;

use App\Http\Controllers\Controller;
use App\Transformers\MemberTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Models\Budaya;
use DB;
use Input;
use Image;
use Illuminate\Support\Facades\Auth;
use Validator;

class BudayaController extends Controller
{
    
    use Helpers;
    public $successStatus = 200;

    public function index_lokal()
    {
        $w = DB::select("SELECT 
        a.id,
        a.nama,
        b.nama AS namakategori,
        c.nama AS namasub,
        gambar
    FROM
        budaya a
            LEFT JOIN
        kategori b ON a.idkategori = b.id
            LEFT JOIN
        subkategori c ON a.idsub = c.idsub
    WHERE
        a.idkategori = 15 AND a.idsub = 14");
        return response()->json(['success' => $w], $this->successStatus);
    }
    
    public function index_jejak()
    {
        $w = DB::select("SELECT 
        a.id,
        a.nama,
        b.nama AS namakategori,
        c.nama AS namasub,
        gambar
    FROM
        budaya a
            LEFT JOIN
        kategori b ON a.idkategori = b.id
            LEFT JOIN
        subkategori c ON a.idsub = c.idsub
    WHERE
        a.idkategori = 15 AND a.idsub = 15");
        return response()->json(['success' => $w], $this->successStatus);
    }

    public function dtl_lokal($id=null)
    {
        $r = DB::select("SELECT 
                        a.id,
                        a.nama,
                        b.nama AS namakategori,
                        c.nama AS namasub,
                        gambar,
                        deskripsi
                    FROM
                        budaya a
                            LEFT JOIN
                        kategori b ON a.idkategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    WHERE
                        a.idkategori = 15 AND a.idsub = 14
                            AND a.id = ?",[$id])[0];
        
        return response()->json(['success' => $r], $this->successStatus);
    }
    
    public function dtl_jejak($id=null)
    {
        $r = DB::select("SELECT 
                    a.id,
                    a.nama,
                    b.nama AS namakategori,
                    c.nama AS namasub,
                    gambar,
                    deskripsi
                FROM
                    budaya a
                        LEFT JOIN
                    kategori b ON a.idkategori = b.id
                        LEFT JOIN
                    subkategori c ON a.idsub = c.idsub
                WHERE
                    a.idkategori = 15 AND a.idsub = 15
                        AND a.id = ?",[$id])[0];
        
        return response()->json(['success' => $r], $this->successStatus);
    }

    
}

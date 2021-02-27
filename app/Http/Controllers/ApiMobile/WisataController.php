<?php

namespace App\Http\Controllers\ApiMobile;

use App\Http\Controllers\Controller;
use App\Transformers\MemberTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Models\Wisata;
use DB;
use Input;
use Image;
use Illuminate\Support\Facades\Auth;
use Validator;

class WisataController extends Controller
{
    use Helpers;
    public $successStatus = 200;
    
    // kategori jelajah
    public function index_jelajah()
    {
        $w = DB::select("SELECT 
                        b.id AS idkategori,
                        b.nama AS kategori,
                        c.idsub,
                        c.nama AS subkategori,
                        a.id AS idwisata,
                        nama_wisata
                    FROM
                        wisata a
                            LEFT JOIN
                        kategori b ON a.kategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    WHERE
                        b.id = 1");
        return response()->json(['success' => $w], $this->successStatus);
    }
    // list jelajah
    public function index_pendakian()
    {
        $w = DB::select("SELECT 
                        b.id AS idkategori,
                        b.nama AS kategori,
                        c.idsub,
                        c.nama AS subkategori,
                        a.id AS idwisata,
                        nama_wisata,
                        gambar,
                        ket,
                        lat,
                        a.long
                    FROM
                        wisata a
                            LEFT JOIN
                        kategori b ON a.kategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    where a.idsub=1 and a.kategori=1");
        return response()->json(['success' => $w], $this->successStatus);
    }
    
    public function index_hutan()
    {
        $w = DB::select("SELECT 
                        b.id AS idkategori,
                        b.nama AS kategori,
                        c.idsub,
                        c.nama AS subkategori,
                        a.id AS idwisata,
                        nama_wisata,
                        gambar,
                        ket,
                        lat,
                        a.long
                    FROM
                        wisata a
                            LEFT JOIN
                        kategori b ON a.kategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    where a.idsub=6 and a.kategori=1");
        return response()->json(['success' => $w], $this->successStatus);
    }
    public function index_pantai()
    {
        $w = DB::select("SELECT 
                        b.id AS idkategori,
                        b.nama AS kategori,
                        c.idsub,
                        c.nama AS subkategori,
                        a.id AS idwisata,
                        nama_wisata,
                        gambar,
                        ket,
                        lat,
                        a.long
                    FROM
                        wisata a
                            LEFT JOIN
                        kategori b ON a.kategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    where a.idsub=7 and a.kategori=1");
        return response()->json(['success' => $w], $this->successStatus);
    }
    public function index_lembah()
    {
        $w = DB::select("SELECT 
                        b.id AS idkategori,
                        b.nama AS kategori,
                        c.idsub,
                        c.nama AS subkategori,
                        a.id AS idwisata,
                        nama_wisata,
                        gambar,
                        ket,
                        lat,
                        a.long
                    FROM
                        wisata a
                            LEFT JOIN
                        kategori b ON a.kategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    where a.idsub=8 and a.kategori=1");
        return response()->json(['success' => $w], $this->successStatus);
    }
    // end list jelajah
    // detail list jelajah
    public function dtl_pendakian($id=null)
    {
        $w = DB::select("SELECT 
                    a.id, nama_wisata, ket, gambar, lat, a.long, jam_buka, jam_tutup
                FROM
                    wisata a
                        LEFT JOIN
                    kategori b ON a.kategori = b.id
                        LEFT JOIN
                    subkategori c ON a.idsub = c.idsub
                WHERE
                    a.idsub = 1 AND a.kategori = 1 and a.id=?",[$id])[0];
        return response()->json(['success' => $w], $this->successStatus);
    }

    public function dtl_hutan($id=null)
    {
        $w = DB::select("SELECT 
                a.id, nama_wisata, ket, gambar, lat, a.long, jam_buka, jam_tutup
            FROM
                wisata a
                    LEFT JOIN
                kategori b ON a.kategori = b.id
                    LEFT JOIN
                subkategori c ON a.idsub = c.idsub
            WHERE
                a.idsub = 6 AND a.kategori = 1 and a.id=?",[$id])[0];
        return response()->json(['success' => $w], $this->successStatus);
    }
    
    public function dtl_pantai($id=null)
    {
        $w = DB::select("SELECT 
                a.id, nama_wisata, ket, gambar, lat, a.long, jam_buka, jam_tutup
            FROM
                wisata a
                    LEFT JOIN
                kategori b ON a.kategori = b.id
                    LEFT JOIN
                subkategori c ON a.idsub = c.idsub
            WHERE
                a.idsub = 7 AND a.kategori = 1 and a.id=?",[$id])[0];
        return response()->json(['success' => $w], $this->successStatus);
    }
    
    public function dtl_lembah($id=null)
    {
        $w = DB::select("SELECT 
                a.id, nama_wisata, ket, gambar, lat, a.long, jam_buka, jam_tutup
            FROM
                wisata a
                    LEFT JOIN
                kategori b ON a.kategori = b.id
                    LEFT JOIN
                subkategori c ON a.idsub = c.idsub
            WHERE
                a.idsub = 8 AND a.kategori = 1 and a.id=?",[$id])[0];
        return response()->json(['success' => $w], $this->successStatus);
    }
    // end detail list jelajah

    // kategori kuliner
    public function kuliner()
    {
        $w = DB::select("SELECT 
                a.id, nama_wisata, ket, gambar, lat, a.long, jam_buka, jam_tutup
            FROM
                wisata a
                    LEFT JOIN
                kategori b ON a.kategori = b.id
                    LEFT JOIN
                subkategori c ON a.idsub = c.idsub
            WHERE
                a.kategori = 2");
        return response()->json(['success' => $w], $this->successStatus);
    }
    
    public function dtl_kuliner($id=null)
    {
        $w = DB::select("SELECT 
                a.id, nama_wisata, ket, gambar, jam_buka, jam_tutup, lat, a.long
            FROM
                wisata a
                    LEFT JOIN
                kategori b ON a.kategori = b.id
                    LEFT JOIN
                subkategori c ON a.idsub = c.idsub
            WHERE
                a.kategori = 2 and a.id=?",[$id])[0];
        return response()->json(['success' => $w], $this->successStatus);
    }

    // kategori hiburan
    public function index_hiburan()
    {
        $w = DB::select("SELECT 
                        b.id AS idkategori,
                        b.nama AS kategori,
                        c.idsub,
                        c.nama AS subkategori,
                        a.id AS idwisata,
                        nama_wisata, lat, a.long
                    FROM
                        wisata a
                            LEFT JOIN
                        kategori b ON a.kategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    WHERE
                        b.id = 3");
        return response()->json(['success' => $w], $this->successStatus);
    }

    public function index_bioskop()
    {
        $w = DB::select("SELECT 
                        b.id AS idkategori,
                        b.nama AS kategori,
                        c.idsub,
                        c.nama AS subkategori,
                        a.id AS idwisata,
                        nama_wisata,
                        gambar,
                        ket, lat, a.long
                    FROM
                        wisata a
                            LEFT JOIN
                        kategori b ON a.kategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    where a.idsub=9 and a.kategori=3");
        return response()->json(['success' => $w], $this->successStatus);
    }
    
    public function index_bermain()
    {
        $w = DB::select("SELECT 
                        b.id AS idkategori,
                        b.nama AS kategori,
                        c.idsub,
                        c.nama AS subkategori,
                        a.id AS idwisata,
                        nama_wisata,
                        gambar,
                        ket, lat, a.long
                    FROM
                        wisata a
                            LEFT JOIN
                        kategori b ON a.kategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    where a.idsub=10 and a.kategori=3");
        return response()->json(['success' => $w], $this->successStatus);
    }
    
    public function index_zoo()
    {
        $w = DB::select("SELECT 
                        b.id AS idkategori,
                        b.nama AS kategori,
                        c.idsub,
                        c.nama AS subkategori,
                        a.id AS idwisata,
                        nama_wisata,
                        gambar,
                        ket, lat, a.long
                    FROM
                        wisata a
                            LEFT JOIN
                        kategori b ON a.kategori = b.id
                            LEFT JOIN
                        subkategori c ON a.idsub = c.idsub
                    where a.idsub=11 and a.kategori=3");
        return response()->json(['success' => $w], $this->successStatus);
    }

    public function dtl_bioskop($id=null)
    {
        $w = DB::select("SELECT 
                    a.id, nama_wisata, ket, gambar, jam_buka, jam_tutup, harga, lat, a.long
                FROM
                    wisata a
                        LEFT JOIN
                    kategori b ON a.kategori = b.id
                        LEFT JOIN
                    subkategori c ON a.idsub = c.idsub
                WHERE
                    a.idsub = 9 AND a.kategori = 3 and a.id=?",[$id])[0];
        return response()->json(['success' => $w], $this->successStatus);
    }
    public function dtl_bermain($id=null)
    {
        $w = DB::select("SELECT 
                    a.id, nama_wisata, ket, gambar, jam_buka, jam_tutup, harga, lat, a.long
                FROM
                    wisata a
                        LEFT JOIN
                    kategori b ON a.kategori = b.id
                        LEFT JOIN
                    subkategori c ON a.idsub = c.idsub
                WHERE
                    a.idsub = 10 AND a.kategori = 3 and a.id=?",[$id])[0];
        return response()->json(['success' => $w], $this->successStatus);
    }
    public function dtl_zoo($id=null)
    {
        $w = DB::select("SELECT 
                    a.id, nama_wisata, ket, gambar, jam_buka, jam_tutup, harga, lat, a.long
                FROM
                    wisata a
                        LEFT JOIN
                    kategori b ON a.kategori = b.id
                        LEFT JOIN
                    subkategori c ON a.idsub = c.idsub
                WHERE
                    a.idsub = 11 AND a.kategori = 3 and a.id=?",[$id])[0];
        return response()->json(['success' => $w], $this->successStatus);
    }

    public function index_belanja()
    {
        $w = DB::select("SELECT 
                a.id, nama_wisata, ket, gambar, lat, a.long
            FROM
                wisata a
                    LEFT JOIN
                kategori b ON a.kategori = b.id
                    LEFT JOIN
                subkategori c ON a.idsub = c.idsub
            WHERE
                a.kategori = 4");
        return response()->json(['success' => $w], $this->successStatus);
    }

    public function dtl_belanja($id=null)
    {
        $w = DB::select("SELECT 
                a.id, nama_wisata, ket, gambar, jam_buka, jam_tutup, lat, a.long
            FROM
                wisata a
                    LEFT JOIN
                kategori b ON a.kategori = b.id
                    LEFT JOIN
                subkategori c ON a.idsub = c.idsub
            WHERE
                a.kategori = 4 and a.id=?",[$id])[0];
        return response()->json(['success' => $w], $this->successStatus);
    }
}

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
    public function index_jelajah(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }
    // list jelajah
    public function index_pendakian(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1 AND idsub=1");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1 AND idsub=1 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }
    
    public function index_hutan(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1 AND idsub=6");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1 AND idsub=6 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }
    public function index_pantai(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1 AND idsub=7");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1 AND idsub=7 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }
    public function index_lembah(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1 AND idsub=8");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 1 AND idsub=8 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
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
    public function dtl_hiburan($id=null)
    {
        $w = DB::select("SELECT 
                    *
                FROM
                    wisata 
                WHERE
                    id = ?",[$id])[0];

        $idWisata = $w->id;

        $queryGallery = DB::select("SELECT * FROM galeri where id_wisata = ?", [$idWisata]);
        
        $obj_merge = (object) array_merge((array) $w, ['gallery' => $queryGallery]);
        
        return response()->json(['success' => $obj_merge], $this->successStatus);
    }
    // end detail list jelajah

    // kategori kuliner
    public function kuliner(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 2");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 2 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }
    
    public function dtl_wisata_jelajah($id=null)
    {
        $w = DB::select("SELECT 
                    *
                FROM
                    wisata 
                WHERE
                    id = ?",[$id])[0];

        $idWisata = $w->id;

        $queryGallery = DB::select("SELECT * FROM galeri where id_wisata = ?", [$idWisata]);
        
        $obj_merge = (object) array_merge((array) $w, ['gallery' => $queryGallery]);
        
        return response()->json(['success' => $obj_merge], $this->successStatus);
    }
    
    public function dtl_kuliner($id=null)
    {
        $w = DB::select("SELECT 
                    *
                FROM
                    wisata 
                WHERE
                    id = ?",[$id])[0];

        $idWisata = $w->id;

        $queryGallery = DB::select("SELECT * FROM galeri where id_wisata = ?", [$idWisata]);
        
        $merge_wisata_gallery = (object) array_merge((array) $w, ['gallery' => $queryGallery]);
    
        $queryMenu = DB::select("SELECT * FROM menu_kuliner WHERE id_kuliner = ?", [$idWisata]);

        $merge_wisata_kuliner = (object) array_merge((array) $merge_wisata_gallery, ['menu' => $queryMenu]);
        
        return response()->json(['success' => $merge_wisata_kuliner], $this->successStatus);
    }

    // kategori hiburan
    public function index_hiburan(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 3");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 3 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }

    public function index_bioskop(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 3 AND idsub=9");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 3 AND idsub=9 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }
    
    public function index_bermain(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 3 AND idsub=10");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 3 AND idsub=10 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }
    
    public function index_zoo(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 3 AND idsub=11");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 3 AND idsub=11 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }

    public function dtl_bioskop($id=null)
    {
        $w = DB::select("SELECT 
                    *
                FROM
                    wisata 
                WHERE
                    id = ?",[$id])[0];

        $idWisata = $w->id;

        $queryGallery = DB::select("SELECT * FROM galeri where id_wisata = ?", [$idWisata]);
        
        $obj_merge = (object) array_merge((array) $w, ['gallery' => $queryGallery]);
        
        return response()->json(['success' => $obj_merge], $this->successStatus);
    }
    public function dtl_bermain($id=null)
    {
        $w = DB::select("SELECT 
                    *
                FROM
                    wisata 
                WHERE
                    id = ?",[$id])[0];

        $idWisata = $w->id;

        $queryGallery = DB::select("SELECT * FROM galeri where id_wisata = ?", [$idWisata]);
        
        $obj_merge = (object) array_merge((array) $w, ['gallery' => $queryGallery]);
        
        return response()->json(['success' => $obj_merge], $this->successStatus);
    }
    public function dtl_zoo($id=null)
    {
        $w = DB::select("SELECT 
                    *
                FROM
                    wisata 
                WHERE
                    id = ?",[$id])[0];

        $idWisata = $w->id;

        $queryGallery = DB::select("SELECT * FROM galeri where id_wisata = ?", [$idWisata]);
        
        $obj_merge = (object) array_merge((array) $w, ['gallery' => $queryGallery]);
        
        return response()->json(['success' => $obj_merge], $this->successStatus);
    }

    public function index_belanja(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 4");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT wisata.nama_wisata, wisata.ket, wisata.gambar, wisata.id FROM wisata WHERE wisata.kategori = 4 AND wisata.nama_wisata LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }

    public function dtl_belanja($id=null)
    {
        $w = DB::select("SELECT 
        id,
        nama_wisata,
        kategori,
        alamat,
        ket,
        gambar,
        jam_buka,
        jam_tutup,
        created_at,
        updated_at,
        lat,
        a.long
    FROM
        wisata a
    WHERE
        id = ?",[$id])[0];

        $idWisata = $w->id;

        $queryGallery = DB::select("SELECT * FROM galeri where id_wisata = ?", [$idWisata]);
        
        $obj_merge = (object) array_merge((array) $w, ['gallery' => $queryGallery]);
        
        return response()->json(['success' => $obj_merge], $this->successStatus);
    }
}

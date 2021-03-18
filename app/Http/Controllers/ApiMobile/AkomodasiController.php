<?php

namespace App\Http\Controllers\ApiMobile;

use App\Http\Controllers\Controller;
use App\Transformers\MemberTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Models\Akomodasi;
use DB;
use Input;
use Image;
use Auth;
use Validator;

class AkomodasiController extends Controller
{
    use Helpers;
    public $successStatus = 200;
    
    public function index(Request $request)
    {
        $search = $request->search;

        if ($search == "" && $search == null) {
            $w = DB::select("SELECT 
                    id,nama, harga, ket, bintang_hotel,gambar
                FROM
                    akomodasi");

            return response()->json(['success' => $w], $this->successStatus);
        } else {
            $w = DB::select("SELECT 
                    id,nama, harga, ket, bintang_hotel,gambar
                FROM
                    akomodasi WHERE nama LIKE ('{$search}%')");

            return response()->json(['success' => $w], $this->successStatus);
        }
    }


    public function dtl($id=null)
    {
        $w = DB::select("SELECT 
                    *
                FROM
                    akomodasi 
                WHERE
                    id = ?",[$id])[0];

        $idWisata = $w->id;

        $queryGallery = DB::select("SELECT * FROM galeri where id = ?", [$idWisata]);
        
        $obj_merge = (object) array_merge((array) $w, ['gallery' => $queryGallery]);
        
        return response()->json(['success' => $obj_merge], $this->successStatus);
    }
}

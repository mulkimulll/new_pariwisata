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

    public function index_budaya()
    {
        $w = DB::select("SELECT id, nama, gambar FROM budaya where idkategori = 5");
        
        $j = DB::select("SELECT id, nama, gambar FROM budaya where idkategori = 6");
        
        $obj_merge = (object) array_merge(['kearifan_lokal' => $w], ['jejak' => $j]);

        return response()->json(['success' => $obj_merge], $this->successStatus);
    }
    

    public function dtl_budaya($id=null)
    {
        $r = DB::select("SELECT id, nama, gambar, deskripsi FROM budaya where id=?",[$id])[0];
        
        return response()->json(['success' => $r], $this->successStatus);
    }
    
}

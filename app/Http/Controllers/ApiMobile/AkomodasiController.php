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
    
    public function index()
    {
        $r = DB::select("SELECT 
                    id,nama, harga, ket, bintang_hotel
                FROM
                    akomodasi");

        return response()->json(['success' => $r], $this->successStatus);
    }


    public function dtl($id=null)
    {
        $r = DB::select("SELECT 
                    id,nama, harga, ket, bintang_hotel
                FROM
                    akomodasi where id=?",[$id])[0];
        
        return response()->json(['success' => $r], $this->successStatus);
    }
}

<?php

namespace App\Http\Controllers\ApiMobile;

use App\Http\Controllers\Controller;
use App\Transformers\MemberTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Models\Info;
use DB;
use Input;
use Image;
use Illuminate\Support\Facades\Auth;
use Validator;

class InfoController extends Controller
{   
    use Helpers;
    public $successStatus = 200;
    
    public function index()
    {
        $w = DB::select("SELECT id,gambar, isi FROM info");
        return response()->json(['success' => $w], $this->successStatus);
    }

    public function dtl($id=null)
    {
        $r = DB::select("SELECT * FROM info where id=?",[$id])[0];
        
        return response()->json(['success' => $r], $this->successStatus);
    }
}

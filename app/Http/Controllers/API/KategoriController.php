<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\MemberTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Models\Kategori;
use DB;
use Input;
use Image;
use Illuminate\Support\Facades\Auth;
use Validator;

class KategoriController extends Controller
{
    use Helpers;
    public $successStatus = 200;
    public function index()
    {
        $k = DB::select("SELECT * FROM kategori");
        return response()->json(['success' => $k], $this->successStatus);
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new kategori;
            $m->nama = $data['nama'];
            $m->save();
            return redirect('/kategori')->with('message','Kategori berhasil di simpan');
         }
    }

    public function edit($id=null)
    {
        $r = DB::select("SELECT * FROM kategori WHERE id=?",[$id])[0];        

        return view('admin.kategori.ubah',compact('r'));
    }

    public function editproses(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();

            kategori::where(['id'=>$id])->update(['nama'=>$data['nama']]);
            return redirect('/kategori')->with('message','Kategori berhasil di update');
        }
    }

    public function destroy($id=null){
        $d=DB::delete("DELETE from kategori where id=?",[$id]);
        return redirect('/kategori')->with('messagehapus','Kategori berhasil di hapus!!!');
  
    }
}

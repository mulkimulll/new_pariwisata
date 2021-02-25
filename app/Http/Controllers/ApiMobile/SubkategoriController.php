<?php

namespace App\Http\Controllers\ApiMobile;

use App\Http\Controllers\Controller;
use App\Transformers\MemberTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Models\Subkategori;
use DB;
use Input;
use Image;
use Illuminate\Support\Facades\Auth;
use Validator;

class SubkategoriController extends Controller
{
    use Helpers;
    public $successStatus = 200;

    public function subkategori_jelajah()
    {
        $k = DB::select("SELECT * FROM subkategori where idkategori=1");
        return response()->json(['success' => $k], $this->successStatus);
    }

    public function subkategori_hiburan()
    {
        $k = DB::select("SELECT * FROM subkategori where idkategori=3");
        return response()->json(['success' => $k], $this->successStatus);
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new subkategori;
            $m->nama = $data['nama'];
            $m->idkategori = $data['idkategori'];
            $m->save();
            return redirect('/subkategori')->with('message','Sub kategori berhasil di simpan');
         }
    }

    public function edit($id=null)
    {
        $r = DB::select("SELECT 
                            a.idsub, a.idkategori, a.nama AS namasub, b.nama AS namakat
                        FROM
                            subkategori a
                                LEFT JOIN
                            kategori b ON a.idkategori = b.id WHERE idsub=?",[$id])[0];        
        $k = DB::select("SELECT * FROM kategori");

        return view('admin.sub.edit',compact('r','k'));
    }

    public function editproses(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();

            subkategori::where(['idsub'=>$id])->update(['nama'=>$data['nama'],
            'idkategori'=>$data['idkategori']]);
            return redirect('/subkategori')->with('message','Kategori berhasil di update');
        }
    }

    public function destroy($id=null){
        $d=DB::delete("DELETE from subkategori where idsub=?",[$id]);
        return redirect('/subkategori')->with('messagehapus','Subkategori berhasil di hapus!!!');
  
    }
}

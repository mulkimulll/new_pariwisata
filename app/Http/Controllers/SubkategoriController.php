<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subkategori;
use DB;
use Input;
use Image;

class SubkategoriController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM kategori");
        $sk = DB::select("SELECT * FROM subkategori");

        return view('admin.sub.index',compact('r','sk'));
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
        $d=DB::delete("DELETE from kategori where id=?",[$id]);
        return redirect('/subkategori')->with('messagehapus','Subkategori berhasil di hapus!!!');
  
    }
}

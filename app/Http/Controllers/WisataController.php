<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use DB;
use Input;
use Image;

class WisataController extends Controller
{
    public function index_jelajah()
    {
        $r = DB::select("SELECT * FROM kategori");
        $sk = DB::select("SELECT * FROM subkategori where idkategori=1");
        $w = DB::select("SELECT 
        a.id,
        nama_wisata,
        b.nama AS kategori,
        c.nama AS subkategori,
        alamat,
        ket,
        gambar,
        a.created_at
    FROM
        wisata a
            LEFT JOIN
        kategori b ON a.kategori = b.id
            LEFT JOIN
        subkategori c ON a.idsub = c.idsub where kategori = 1");

        return view('admin.wisata.jelajah.index',compact('r','sk','w'));
    }

    public function create_jelajah(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new wisata;
            $m->nama_wisata = $data['nama_wisata'];
            $m->kategori = '1';
            $m->idsub = $data['subkategori'];
            $m->alamat = $data['alamat'];
            $m->ket = $data['keterangan'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/wisata/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $filename;
               }
            $m->save();
            return redirect('/wisata-jelajah')->with('message','Wisata berhasil di simpan');
         }
    }

    public function getCategory($idkategori)
    {
        $data = DB::select("SELECT 
                    idsub, a.nama AS namasub, b.id as idkategori, b.nama, a.created_at
                FROM
                    subkategori a
                        LEFT JOIN
                    kategori b ON a.idkategori = b.id where b.id=? ",[$idkategori]);
        \Log::info($data);
        return response()->json(['data' => $data]);
    }


    public function dtl_jelajah($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
        return view('admin.wisata.jelajah.dtl',compact('r'));
    }

    public function update_jelajah($id=null)
    {
        $r = DB::select("SELECT * FROM wisata WHERE id=?",[$id])[0];    
        $w = DB::select("SELECT * FROM kategori");    
        $sk = DB::select("SELECT * FROM subkategori where idkategori=1");    

        return view('admin.wisata.jelajah.ubah',compact('r','w','sk'));
    }

    public function update_jelajah_proses(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $update = DB::select("SELECT * FROM wisata where id=?", [$id])[0];

            $data = $request->all();
            
            if($request->file('gambar') == "")
            {
                $update->gambar = $update->gambar;
            } 
            else {
                $file       = $request->file('gambar');
                $filename   = $file->getClientOriginalName();
                $request->file('gambar')->move("images/wisata", $filename);
                $update->gambar = $filename;
            }
            $filename = $update->gambar; 
           
            wisata::where(['id'=>$id])->update(['nama_wisata'=>$data['nama_wisata'],
            'kategori'=>'1','idsub'=>$data['subkategori'],'alamat'=>$data['alamat'],
            'ket'=>$data['keterangan'],'gambar'=>$filename]);
            return redirect('/wisata-jelajah')->with('message','Wisata berhasil di update');
        }
    }

    public function destroy_jelajah($id=null){
        $d=DB::delete("DELETE from wisata where id=?",[$id]);
        return redirect('/wisata-jelajah')->with('messagehapus','data berhasil di hapus!!!');
  
    }
}

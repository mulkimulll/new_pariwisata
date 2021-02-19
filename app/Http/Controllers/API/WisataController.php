<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\MemberTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Models\Wisata;
use DB;
use Input;
use Image;

class WisataController extends Controller
{
    use Helpers;
    
    public function index()
    {
        $r = DB::select("SELECT * FROM kategori");
        $sk = DB::select("SELECT * FROM subkategori");
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
        subkategori c ON a.idsub = c.idsub");

        return view('admin.wisata.index',compact('r','sk','w'));
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new wisata;
            $m->nama_wisata = $data['nama_wisata'];
            $m->kategori = $data['kategori'];
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
            return redirect('/wisata')->with('message','Wisata berhasil di simpan');
         }
    }

    public function dtl($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
        return view('admin.wisata.dtl',compact('r'));
    }

    public function update($id=null)
    {
        $r = DB::select("SELECT * FROM wisata WHERE id=?",[$id])[0];    
        $w = DB::select("SELECT * FROM kategori");    
        $sk = DB::select("SELECT * FROM subkategori");    

        return view('admin.wisata.ubah',compact('r','w','sk'));
    }

    public function updateW(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('gambar')){
                $file_photo = $request->file('gambar');

                // Kalo pas diedit gambar diganti / masukin gambar
                if($file_photo) {
                    $filename = $file_photo->getClientOriginalName();
                    $data['gambar'] = $filename; // Update field photo
            
                    $proses = $file_photo->move('images/wisata/', $filename);
                }
            }
            $filename = $data['gambar']; 
           
            wisata::where(['id'=>$id])->update(['nama_wisata'=>$data['nama_wisata'],
            'kategori'=>$data['kategori'],'idsub'=>$data['subkategori'],'alamat'=>$data['alamat'],
            'ket'=>$data['keterangan'],'gambar'=>$filename]);
            return redirect('/wisata')->with('message','Wisata berhasil di update');
        }
    }

    public function destroy($id=null){
        $d=DB::delete("DELETE from wisata where id=?",[$id]);
        return redirect('/wisata')->with('messagehapus','data berhasil di hapus!!!');
  
    }
}

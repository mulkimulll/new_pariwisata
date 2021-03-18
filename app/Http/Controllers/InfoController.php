<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use DB;
use Input;
use Image;

class InfoController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM info");

        return view('admin.info.index',compact('r'));
    }
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new info;
            $m->judul = $data['judul'];
            $m->isi = $data['isi'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/info/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $large_image_path;
               }
            $m->save();
            return redirect('/info')->with('message','data berhasil di simpan');
         }
    }

    // public function dtl($id=null)
    // {
    //     $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
    //     return view('admin.wisata.dtl',compact('r'));
    // }

    // public function update($id=null)
    // {
    //     $r = DB::select("SELECT * FROM wisata WHERE id=?",[$id])[0];    
    //     $w = DB::select("SELECT * FROM kategori");    
    //     $sk = DB::select("SELECT * FROM subkategori");    

    //     return view('admin.wisata.ubah',compact('r','w','sk'));
    // }

    // public function updateW(Request $request,$id=null)
    // {
    //     if($request->isMethod('post')){
    //         $data = $request->all();
    //         if($request->hasFile('gambar')){
    //             $file_photo = $request->file('gambar');

    //             // Kalo pas diedit gambar diganti / masukin gambar
    //             if($file_photo) {
    //                 $filename = $file_photo->getClientOriginalName();
    //                 $data['gambar'] = $filename; // Update field photo
            
    //                 $proses = $file_photo->move('images/wisata/', $filename);
    //             }
    //         }
    //         $filename = $data['gambar']; 
           
    //         wisata::where(['id'=>$id])->update(['nama_wisata'=>$data['nama_wisata'],
    //         'kategori'=>$data['kategori'],'idsub'=>$data['subkategori'],'alamat'=>$data['alamat'],
    //         'ket'=>$data['keterangan'],'gambar'=>$filename]);
    //         return redirect('/wisata')->with('message','Wisata berhasil di update');
    //     }
    // }

    // public function destroy($id=null){
    //     $d=DB::delete("DELETE from wisata where id=?",[$id]);
    //     return redirect('/wisata')->with('messagehapus','data berhasil di hapus!!!');
  
    // }
}

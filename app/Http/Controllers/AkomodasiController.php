<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akomodasi;
use DB;
use Input;
use Image;
use Auth;

class AkomodasiController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM akomodasi");

        return view('admin.akomodasi.index',compact('r'));
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new akomodasi;
            $m->nama = $data['nama'];
            $m->alamat = $data['alamat'];
            $m->telp = $data['telp'];
            $m->bintang_hotel = $data['bintang_hotel'];
            $m->harga = $data['harga'];
            $m->ket = $data['ket'];
            $m->create_user = Auth::user()->name;
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/akomodasi/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $large_image_path;
               }
            $m->save();
            return redirect('/akomodasi')->with('message','data berhasil di simpan');
         }
    }

    public function dtl($id=null)
    {
        $r = DB::select("SELECT * FROM akomodasi where id=?",[$id])[0];
        
        return view('admin.akomodasi.dtl',compact('r'));
    }

    public function update($id=null)
    {
        $r = DB::select("SELECT * FROM akomodasi WHERE id=?",[$id])[0];    
        $w = DB::select("SELECT * FROM kategori");    
        $sk = DB::select("SELECT * FROM subkategori");    

        return view('admin.akomodasi.edit',compact('r','w','sk'));
    }

    public function updateproses(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $update = DB::select("SELECT * FROM akomodasi where id=?", [$id])[0];

            $data = $request->all();
            
            if($request->file('gambar') == "")
            {
                $update->gambar = $update->gambar;
            } 
            else {
                $file       = $request->file('gambar');
                $filename   = $file->getClientOriginalName();
                $request->file('gambar')->move("images/akomodasi", $filename);
                $update->gambar = $filename;
            }
            $filename = $update->gambar; 
           
            akomodasi::where(['id'=>$id])->update(['nama'=>$data['nama'],
            'alamat'=>$data['alamat'],'telp'=>$data['telp'],'bintang_hotel'=>$data['bintang_hotel'],
            'harga'=>$data['harga'],'ket'=>$data['ket'],'create_user'=> Auth::user()->name,'gambar'=>$filename]);
            return redirect('/akomodasi')->with('message','data berhasil di update');
        }
    }

    public function destroy($id=null){
        $d=DB::delete("DELETE from akomodasi where id=?",[$id]);
        return redirect('/akomodasi')->with('messagehapus','data berhasil di hapus!!!');
  
    }
}

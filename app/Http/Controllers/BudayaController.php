<?php

namespace App\Http\Controllers;
use App\Models\Budaya;
use DB;
use Input;
use Image;

use Illuminate\Http\Request;

class BudayaController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM budaya");
        $sk = DB::select("SELECT * FROM subkategori where idkategori=15");

        return view('admin.budaya.index',compact('r','sk'));
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new budaya;
            $m->nama = $data['nama'];
            $m->idkategori = '15';
            $m->idsub = $data['idsub'];
            $m->deskripsi = $data['deskripsi'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/budaya/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $large_image_path;
               }
            $m->save();
            return redirect('/budaya')->with('message','data berhasil di simpan');
         }
    }

    public function dtl($id=null)
    {
        $r = DB::select("SELECT * FROM budaya where id=?",[$id])[0];
        
        return view('admin.budaya.dtl',compact('r'));
    }

    public function update($id=null)
    {
        $r = DB::select("SELECT * FROM budaya WHERE id=?",[$id])[0];    
        $w = DB::select("SELECT * FROM kategori");    
        $sk = DB::select("SELECT * FROM subkategori");    

        return view('admin.budaya.edit',compact('r','w','sk'));
    }

    public function updateproses(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $update = DB::select("SELECT * FROM budaya where id=?", [$id])[0];

            $data = $request->all();
            
            if($request->file('gambar') == "")
            {
                $update->gambar = $update->gambar;
            } 
            else {
                $file       = $request->file('gambar');
                $filename   = $file->getClientOriginalName();
                $large_image_path = 'images/budaya/'.$filename;
                $update->gambar = $filename;
            }
            $filename = $large_image_path; 
           
            budaya::where(['id'=>$id])->update(['nama'=>$data['nama'],
            'alamat'=>$data['alamat'],'telp'=>$data['telp'],'bintang_hotel'=>$data['bintang_hotel'],
            'harga'=>$data['harga'],'ket'=>$data['ket'],'create_user'=> Auth::user()->name,'gambar'=>$filename]);
            return redirect('/budaya')->with('message','data berhasil di update');
        }
    }

    public function destroy($id=null){
        $d=DB::delete("DELETE from budaya where id=?",[$id]);
        return redirect('/budaya')->with('messagehapus','data berhasil di hapus!!!');
  
    }
}

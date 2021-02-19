<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportasi;
use DB;
use Input;
use Image;

class TransportasiController extends Controller
{
    public function index()
    {
        $r = DB::select("SELECT * FROM transportasi");

        return view('admin.transportasi.index',compact('r'));
    }

    public function dtl($id=null)
    {
        $r = DB::select("SELECT * FROM transportasi where id=?",[$id])[0];

        return view('admin.transportasi.dtl',compact('r'));
    }

    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new transportasi;
            $m->kendaraan = $data['kendaraan'];
            $m->tujuan = $data['tujuan'];
            $m->keterangan = $data['keterangan'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/transportasi/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $filename;
               }
            $m->save();
            return redirect('/transportasi')->with('message','Data berhasil di simpan');
         }
    }

    public function update($id=null)
    {
        $r = DB::select("SELECT * FROM transportasi WHERE id=?",[$id])[0];    
        $w = DB::select("SELECT * FROM kategori");    
        $sk = DB::select("SELECT * FROM subkategori");    

        return view('admin.transportasi.edit',compact('r','w','sk'));
    }

    public function updateT(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('gambar')){
                $file_photo = $request->file('gambar');

                // Kalo pas diedit gambar diganti / masukin gambar
                if($file_photo) {
                    $filename = $file_photo->getClientOriginalName();
                    $data['gambar'] = $filename; // Update field photo
            
                    $proses = $file_photo->move('images/transportasi/', $filename);
                }
            }
            $filename = $data['gambar']; 
           
            transportasi::where(['id'=>$id])->update(['kendaraan'=>$data['kendaraan'],
            'tujuan'=>$data['tujuan'],'keterangan'=>$data['keterangan'],'gambar'=>$filename]);
            return redirect('/transportasi')->with('message','data berhasil di update');
        }
    }

    public function destroy($id=null){
        $d=DB::delete("DELETE from transportasi where id=?",[$id]);
        return redirect('/transportasi')->with('messagehapus','data berhasil di hapus!!!');
  
    }
}

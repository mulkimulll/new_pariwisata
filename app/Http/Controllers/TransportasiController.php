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
        $t = DB::select("SELECT * FROM jenis_transportasi");

        return view('admin.transportasi.index',compact('r','t'));
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
            $m->jenis_transportasi = $data['jenis_transportasi'];
            $m->nama = $data['nama'];
            $m->biaya = $data['biaya'];
            $m->trayek = $data['trayek'];
            $m->jam_keberangkatan = $data['jam_keberangkatan'];
            $m->jam_tiba = $data['jam_tiba'];
            $m->keterangan = $data['keterangan'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/transportasi/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $large_image_path;
               }
            $m->save();
            return redirect('/transportasi')->with('message','Data berhasil di simpan');
         }
    }

    public function update($id=null)
    {
        $r = DB::select("SELECT * FROM transportasi WHERE id=?",[$id])[0];    
        $t = DB::select("SELECT * FROM jenis_transportasi");    
        $sk = DB::select("SELECT * FROM transportasi a left join jenis_transportasi b on a.jenis_transportasi=b.id where a.id=?",[$id])[0];    

        return view('admin.transportasi.edit',compact('r','t','sk'));
    }

    public function updateT(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $update = DB::select("SELECT * FROM transportasi where id=?", [$id])[0];

            $data = $request->all();
            
            if($request->file('gambar') == "")
            {
                $update->gambar = $update->gambar;
            } 
            else {
                $file       = $request->file('gambar');
                $filename   = $file->getClientOriginalName();
                $request->file('gambar')->move("images/transportasi", $filename);
                $update->gambar = $filename;
            }
            $filename = $update->gambar; 
           
            transportasi::where(['id'=>$id])->update(['jenis_transportasi'=>$data['jenis_transportasi'],
            'nama'=>$data['nama'],'biaya'=>$data['biaya'],'trayek'=>$data['trayek'],'jam_keberangkatan'=>$data['jam_keberangkatan'],'keterangan'=>$data['keterangan'],'gambar'=>$filename]);
            return redirect('/transportasi')->with('message','data berhasil di update');
        }
    }

    public function destroy($id=null){
        $d=DB::delete("DELETE from transportasi where id=?",[$id]);
        return redirect('/transportasi')->with('messagehapus','data berhasil di hapus!!!');
  
    }
}

<?php

namespace App\Http\Controllers\ApiMobile;

use App\Http\Controllers\Controller;
use App\Transformers\MemberTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Models\Info;
use DB;
use Input;
use Image;
use Illuminate\Support\Facades\Auth;
use Validator;

class InfoController extends Controller
{   
    use Helpers;
    public $successStatus = 200;
    
    public function index()
    {
        $w = DB::select("SELECT * FROM info");
        return response()->json(['success' => $w], $this->successStatus);
    }
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new info;
            $m->judul = $data['judul'];
            $m->isi = $data['isi'];
            $m->save();
            return redirect('/info')->with('message','data berhasil di simpan');
         }
    }

    public function dtl($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
        return response()->json(['success' => $r], $this->successStatus);
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

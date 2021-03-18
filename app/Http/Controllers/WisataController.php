<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Galeri;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Input;
use Image;

class WisataController extends Controller
{
    // index
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
    
    public function index_kuliner()
    {
        $r = DB::select("SELECT * FROM kategori");
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
        subkategori c ON a.idsub = c.idsub where kategori = 2");

        return view('admin.wisata.kuliner.index',compact('r','w'));
    }
    
    public function index_hiburan()
    {
        $r = DB::select("SELECT * FROM kategori");
        $sk = DB::select("SELECT * FROM subkategori where idkategori=3");
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
        subkategori c ON a.idsub = c.idsub where kategori = 3");

        return view('admin.wisata.hiburan.index',compact('r','sk','w'));
    }

    public function index_belanja()
    {
        $r = DB::select("SELECT * FROM kategori");
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
        subkategori c ON a.idsub = c.idsub where kategori = 4");

        return view('admin.wisata.belanja.index',compact('r','w'));
    }
    // end index

    // create
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
            $m->jam_buka = $data['jam_buka'];
            $m->jam_tutup = $data['jam_tutup'];
            $m->harga = $data['harga'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/wisata/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $large_image_path;
               }
            $m->save();
            // dd($data);
            return redirect('/wisata-jelajah')->with('message','Wisata berhasil di simpan');
         }
    }
    
    public function create_kuliner(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new wisata;
            $m->nama_wisata = $data['nama_wisata'];
            $m->kategori = '2';
            $m->alamat = $data['alamat'];
            $m->ket = $data['keterangan'];
            $m->jam_buka = $data['jam_buka'];
            $m->jam_tutup = $data['jam_tutup'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/wisata/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $large_image_path;
               }
            $m->save();
            return redirect('/wisata-kuliner')->with('message','Wisata berhasil di simpan');
         }
    }
    
    public function create_hiburan(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new wisata;
            $m->nama_wisata = $data['nama_wisata'];
            $m->kategori = '3';
            $m->idsub = $data['subkategori'];
            $m->alamat = $data['alamat'];
            $m->jam_buka = $data['jam_buka'];
            $m->jam_tutup = $data['jam_tutup'];
            $m->harga = $data['harga'];
            $m->ket = $data['keterangan'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/wisata/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $large_image_path;
               }
            $m->save();
            return redirect('/wisata-hiburan')->with('message','Wisata berhasil di simpan');
         }
    }

    public function create_belanja(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new wisata;
            $m->nama_wisata = $data['nama_wisata'];
            $m->kategori = '4';
            $m->alamat = $data['alamat'];
            $m->jam_buka = $data['jam_buka'];
            $m->jam_tutup = $data['jam_tutup'];
            $m->ket = $data['keterangan'];
            if($request->hasfile('gambar')){
                $files = $request->file('gambar');
                $extension = $files->getClientOriginalExtension();
                $filename = rand(111,9999).'.'.$extension;
                $large_image_path = 'images/wisata/'.$filename;
                //image resize code
                Image::make($files)->save($large_image_path);
                $m->gambar = $large_image_path;
               }
            $m->save();
            return redirect('/wisata-belanja')->with('message','Wisata berhasil di simpan');
         }
    }

    public function index_galeri()
    {
        $r = DB::SELECT("SELECT * FROM wisata");
        return view('admin.galeri.index',compact('r'));
    }

    public function create_galeri(Request $request, $id=null)
    {
        if ($request->hasfile('nama')) {
            $data = $request->all();
            $images = $request->file('nama');

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('uploads', $name, 'public');

                galeri::create([
                    'nama' => $name,
                    'id_wisata' => $data['wisata'],
                    'path' => '/storage/'.$path
                  ]);
            }
         }

        return back()->with('success', 'galeri berhasil disimpan');
    }
    // end create

    // public function getCategory($idkategori)
    // {
    //     $data = DB::select("SELECT 
    //                 idsub, a.nama AS namasub, b.id as idkategori, b.nama, a.created_at
    //             FROM
    //                 subkategori a
    //                     LEFT JOIN
    //                 kategori b ON a.idkategori = b.id where b.id=? ",[$idkategori]);
    //     \Log::info($data);
    //     return response()->json(['data' => $data]);
    // }

    // detail
    public function dtl_jelajah($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        $g = DB::select("SELECT * from galeri where id_wisata=?",[$id]);
        
        return view('admin.wisata.jelajah.dtl',compact('r','g'));
    }
    
    public function dtl_kuliner($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        $g = DB::select("SELECT * from galeri where id_wisata=?",[$id]);
        
        return view('admin.wisata.kuliner.dtl',compact('r','g'));
    }
    
    public function dtl_hiburan($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        $g = DB::select("SELECT * from galeri where id_wisata=?",[$id]);
        
        return view('admin.wisata.hiburan.dtl',compact('r','g'));
    }
    
    public function dtl_belanja($id=null)
    {
        $r = DB::select("SELECT * FROM wisata where id=?",[$id])[0];
        
        return view('admin.wisata.belanja.dtl',compact('r'));
    }
    // end detail

    // update
    public function update_jelajah($id=null)
    {
        $r = DB::select("SELECT * FROM wisata WHERE id=?",[$id])[0];    
        $w = DB::select("SELECT * FROM kategori");    
        $sk = DB::select("SELECT * FROM subkategori where idkategori=1");    

        return view('admin.wisata.jelajah.ubah',compact('r','w','sk'));
    }
    
    public function update_kuliner($id=null)
    {
        $r = DB::select("SELECT * FROM wisata WHERE id=?",[$id])[0];    
        $w = DB::select("SELECT * FROM kategori");      

        return view('admin.wisata.kuliner.edit',compact('r','w'));
    }
    
    public function update_hiburan($id=null)
    {
        $r = DB::select("SELECT * FROM wisata WHERE id=?",[$id])[0];    
        $w = DB::select("SELECT * FROM kategori");      
        $sk = DB::select("SELECT * FROM subkategori where idkategori=3");  

        return view('admin.wisata.hiburan.edit',compact('r','w','sk'));
    }
    
    public function update_belanja($id=null)
    {
        $r = DB::select("SELECT * FROM wisata WHERE id=?",[$id])[0];    
        $w = DB::select("SELECT * FROM kategori");      

        return view('admin.wisata.belanja.edit',compact('r','w'));
    }
    // end update

    // update proses
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
                $large_image_path = 'images/wisata/'.$filename;
                $update->gambar = $filename;
            }
            $filename = $large_image_path; 
           
            wisata::where(['id'=>$id])->update(['nama_wisata'=>$data['nama_wisata'],
            'kategori'=>'1','idsub'=>$data['subkategori'],'alamat'=>$data['alamat'],'harga'=>$data['harga'],'jam_buka'=>$data['jam_buka'],'jam_tutup'=>$data['jam_tutup'],
            'ket'=>$data['keterangan'],'gambar'=>$filename]);
            return redirect('/wisata-jelajah')->with('message','Wisata berhasil di update');
        }
    }
    
    public function update_kuliner_proses(Request $request,$id=null)
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
                $large_image_path = 'images/wisata/'.$filename;
                $update->gambar = $filename;
            }
            $filename = $large_image_path; 
           
            wisata::where(['id'=>$id])->update(['nama_wisata'=>$data['nama_wisata'],
            'kategori'=>'2','alamat'=>$data['alamat'],'jam_buka'=>$data['jam_buka'],'jam_tutup'=>$data['jam_tutup'],
            'ket'=>$data['keterangan'],'gambar'=>$filename]);
            return redirect('/wisata-kuliner')->with('message','Wisata berhasil di update');
        }
    }
    
    public function update_hiburan_proses(Request $request,$id=null)
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
                $large_image_path = 'images/wisata/'.$filename;
                $update->gambar = $filename;
            }
            $filename = $large_image_path; 
           
            wisata::where(['id'=>$id])->update(['nama_wisata'=>$data['nama_wisata'],
            'kategori'=>'3','idsub'=>$data['subkategori'],'alamat'=>$data['alamat'],'jam_buka'=>$data['jam_buka'],'jam_tutup'=>$data['jam_tutup'],'harga'=>$data['harga'],
            'ket'=>$data['keterangan'],'gambar'=>$filename]);
            return redirect('/wisata-hiburan')->with('message','Wisata berhasil di update');
        }
    }
    
    public function update_belanja_proses(Request $request,$id=null)
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
                $large_image_path = 'images/wisata/'.$filename;
                $update->gambar = $filename;
            }
            $filename = $large_image_path; 
           
            wisata::where(['id'=>$id])->update(['nama_wisata'=>$data['nama_wisata'],
            'kategori'=>'4','alamat'=>$data['alamat'],'jam_buka'=>$data['jam_buka'],'jam_tutup'=>$data['jam_tutup'],
            'ket'=>$data['keterangan'],'gambar'=>$filename]);
            return redirect('/wisata-belanja')->with('message','Data berhasil di update');
        }
    }
    // end update proses

    // destroy
    public function destroy_jelajah($id=null){
        $d=DB::delete("DELETE from wisata where id=?",[$id]);
        
        return redirect('/wisata-jelajah')->with('messagehapus','data berhasil di hapus!!!');
  
    }
    
    public function destroy_kuliner($id=null){
        $d=DB::delete("DELETE from wisata where id=?",[$id]);
        
        return redirect('/wisata-kuliner')->with('messagehapus','data berhasil di hapus!!!');
    }
    
    public function destroy_hiburan($id=null){
        $d=DB::delete("DELETE from wisata where id=?",[$id]);
        
        return redirect('/wisata-hiburan')->with('messagehapus','data berhasil di hapus!!!');
    }
    
    public function destroy_belanja($id=null){
        $d=DB::delete("DELETE from wisata where id=?",[$id]);
        
        return redirect('/wisata-belanja')->with('messagehapus','data berhasil di hapus!!!');
    }
}

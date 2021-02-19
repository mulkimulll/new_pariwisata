@extends('layouts.admin.index')
@section('content')
<div class="col-md-4">
    <div class="card">
        <h4>
            Ubah Akomodasi
        </h4>
        <form class="forms-sample" method="POST" action="{{ url('/akomodasi-update-proses/'.$r->id) }}" enctype="multipart/form-data" >
          @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <div>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $r->nama }}">
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <div>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $r->alamat }}">
                </div>
            </div>
            <div class="form-group">
                <label for="telp">No. telp</label>
                <div>
                    <input type="number" class="form-control" name="telp" id="telp" value="{{ $r->telp }}">
                </div>
            </div>
            <div class="form-group">
                <label for="bintang_hotel">Bintang/Kelas Hotel</label>
                <div>
                    <input type="number" class="form-control" name="bintang_hotel" id="bintang_hotel" value="{{ $r->bintang_hotel }}">
                </div>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <div>
                    <input type="number" class="form-control" name="harga" id="harga" value="{{ $r->harga }}">
                </div>
            </div>
            <div class="form-group">
                <label for="ket">Keterangan</label>
                <div>
                    <textarea class="form-control" name="ket" id="ket" rows="4">{{ $r->ket }}</textarea>
                </div>
            </div>
            <div class="form-group">
            <label>Gambar</label>
            <div>
                <input type="file" name="gambar" id="gambar" autocomplete="off" class="form-control-file">
            </div>
            </div>
            <button type="submit" class="btn btn-success mr-2">Simpan</button>
            <button type="reset" class="btn btn-danger mr-2">Batal</button>
            <a href="{{ url('/akomodasi') }}" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
        </form>
    </div>
</div>
@endsection
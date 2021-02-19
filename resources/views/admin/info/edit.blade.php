@extends('layouts.admin.index')
@section('content')
<div class="col-md-4">
    <div class="card">
        <h4>
            Ubah Informasi {{ $r->judul }}
        </h4>
        <form class="forms-sample" method="POST" action="{{ url('/info-update-proses/'.$r->id) }}" enctype="multipart/form-data" >
          @csrf
          <div class="form-group">
            <label for="judul">Judul Informasi</label>
            <div>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ $r->judul }}">
            </div>
        </div>
        <div class="form-group">
            <label for="isi">isi</label>
            <div>
                <textarea class="form-control" name="isi" id="isi" rows="4">{{ $r->isi }}</textarea>
            </div>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <div>
              <input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off" class="form-control-file">
          </div>
        </div>
            <button type="submit" class="btn btn-success mr-2">Simpan</button>
            <button type="reset" class="btn btn-danger mr-2">Batal</button>
            <a href="{{ url('/info') }}" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
        </form>
    </div>
</div>
@endsection
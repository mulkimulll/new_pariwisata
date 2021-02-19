@extends('layouts.admin.index')
@section('content')
<div class="col-md-4">
    <div class="card">
        <h4>
            Ubah Transportasi
        </h4>
        <form class="forms-sample" method="POST" action="{{ url('/trans-update-proses/'.$r->id) }}" enctype="multipart/form-data" >
          @csrf
            <div class="form-group">
                    <label for="kendaraan">Kendaraan</label>
                    <div>
                        <input type="text" class="form-control" name="kendaraan" id="kendaraan" value="{{ $r->kendaraan }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <div>
                        <input type="text" class="form-control" name="tujuan" id="tujuan" value="{{ $r->tujuan }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <div>
                        <textarea class="form-control" name="keterangan" id="keterangan" rows="4">{{ $r->keterangan }}</textarea>
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
            <a href="{{ url('/transportasi') }}" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
        </form>
    </div>
</div>
@endsection
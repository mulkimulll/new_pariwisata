@extends('layouts.admin.index')
@section('content')
<div class="col-md-4">
    <div class="card">
        <h4>
            Ubah Destinasi Wisata
        </h4>
        <form class="forms-sample" method="POST" action="{{ url('/wisata-update-proses/'.$r->id) }}" enctype="multipart/form-data" >
          @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <div>
                    <input type="text" class="form-control" name="nama_wisata" id="nama_wisata" value="{{ $r->nama_wisata }}">
                </div>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" value="{{ $r->kategori }}">
                    @foreach ($w as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="subkategori">Subkategori</label>
                <select class="form-control" id="subkategori" name="subkategori">
                    @foreach ($sk as $item)
                        <option value="{{ $item->idsub }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">alamat</label>
                <div>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $r->alamat }}">
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <div>
                    {{-- <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan"> --}}
                    <textarea class="form-control" name="keterangan" id="keterangan" rows="4">{{ $r->ket }}</textarea>
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
            <a href="{{ url('/wisata') }}" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
        </form>
    </div>
</div>
@endsection
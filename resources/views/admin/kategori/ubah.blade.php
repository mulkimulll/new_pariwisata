@extends('layouts.admin.index')
@section('head-section')
    
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h4>
                    Tambah kategori wisata
                </h4>
                <form method="POST" action="{{ url('kat-ubah-proses/'.$r->id) }}" class="forms-sample"> {{ csrf_field() }}
                  @csrf
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $r->nama }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button type="reset" class="btn btn-danger mr-2">Batal</button>
                    <a href="{{ url('/kategori') }}"><button type="button" class="btn btn-secondary"><i class="ti-back-left mr-2"></i> Kembali</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection
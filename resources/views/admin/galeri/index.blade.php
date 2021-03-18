@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-md-4">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('success') }}</strong>
        </div>
        @endif
        <div class="card">
            <h4>
                Tambah Galeri
            </h4>
            <form class="forms-sample" method="POST" action="{{ route('create_galeri') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Wisata</label>
                    <div>
                        <select class="form-control" id="wisata" name="wisata">
                            <option value="#">--- PILIH WISATA---</option>
                            @foreach ($r as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_wisata }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Galeri</label>
                    <div>
                        <input type="file" name="nama[]" multiple accept="image/*">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-light">Batal</button>
            </form>
        </div>
    </div>
</div>
@endsection

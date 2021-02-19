@extends('layouts.admin.index')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <h4>
                    Ubah Subkategori Wisata
                </h4>
                <form class="forms-sample" method="POST" action="{{ url('subkategori-ubah-proses/'.$r->idsub) }}">
                  @csrf
                    <div class="form-group">
                        <label for="idkategori">Kategori</label>
                        <select class="form-control" id="idkategori" name="idkategori">
                            {{-- <option value="{{ $r->idkategori }}" disabled>--{{ $r->namakat }}--</option> --}}
                            @foreach ($k as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Subkategori</label>
                        <div>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $r->namasub }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button type="reset" class="btn btn-danger mr-2">Batal</button>
                    <a href="{{ url('/subkategori') }}"><button type="button" class="btn btn-secondary"><i class="ti-back-left mr-2"></i> Kembali</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection
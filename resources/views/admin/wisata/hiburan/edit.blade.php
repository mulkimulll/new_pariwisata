@extends('layouts.admin.index')
@section('content')
<div class="col-md-4">
    <div class="card">
        <h4>
            Ubah Destinasi Wisata
        </h4>
        <form class="forms-sample" method="POST" action="{{ url('/wisata-hiburan-update-proses/'.$r->id) }}" enctype="multipart/form-data" >
          @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <div>
                    <input type="text" class="form-control" name="nama_wisata" id="nama_wisata" value="{{ $r->nama_wisata }}">
                </div>
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
                    <textarea id="summernote" name="keterangan">{{ $r->ket }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <div>
                    <input type="file" name="gambar" class="dropify" data-default-file="{{ asset('/images/wisata/'.$r->gambar) }}" value="{{ $r->gambar }}" />
                </div>
              </div>
            <button type="submit" class="btn btn-success mr-2">Simpan</button>
            <button type="reset" class="btn btn-danger mr-2">Batal</button>
            <a href="{{ url('/wisata-hiburan') }}" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('vendors/dropify-master/dist/js/dropify.js')}}"></script>
<script>
    $('#summernote').summernote({
        placeholder: 'Isi Keterangan',
        tabsize: 10,
        height: 100
    });    

    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove':  'Remove',
            'error':   'Ooops, something wrong happended.'
        }
    });
</script>    
@endsection
@section('css')
<link href="{{asset('vendors/dropify-master/dist/css/dropify.css')}}" rel="stylesheet">
@endsection
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
                    <label for="jenis_transportasi">Jenis transportasi</label>
                    <select class="form-control" id="jenis_transportasi" name="jenis_transportasi">
                            <option value="{{ $sk->id }}" hidden>{{ $sk->nama }}</option>
                            @foreach ($t as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama transportasi</label>
                    <div>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $r->nama }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="biaya">Biaya</label>
                    <div>
                        <input type="text" class="form-control" name="biaya" id="biaya" value="{{ $r->biaya }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="trayek">Trayek</label>
                    <div>
                        <input type="text" class="form-control" name="trayek" id="trayek" value="{{ $r->trayek }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="jam_keberangkatan">Jam Keberangkatan</label>
                    <div>
                        <input type="text" class="form-control" name="jam_keberangkatan" id="jam_keberangkatan" value="{{ $r->jam_keberangkatan }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <div>
                        <textarea id="summernote" name="keterangan">{{ $r->keterangan }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <div>
                        <input type="file" name="gambar" class="dropify" data-default-file="{{ asset('/images/transportasi/'.$r->gambar) }}" value="{{ $r->gambar }}" />
                    </div>
                  </div>
            <button type="submit" class="btn btn-success mr-2">Simpan</button>
            <button type="reset" class="btn btn-danger mr-2">Batal</button>
            <a href="{{ url('/transportasi') }}" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
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
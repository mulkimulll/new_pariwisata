@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h4>
                Tambah Informasi
            </h4>
            <form class="forms-sample" method="POST" action="{{ route('create-info') }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="judul">Judul Informasi</label>
                    <div>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul">
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi">isi</label>
                    <div>
                        <textarea id="summernote" name="isi"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-danger mr-2">Batal</button>
            </form>
        </div>
    </div>
    <div class="col-md-8">
        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">                            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('message') }}</strong>
        </div>    
        @endif 
        @if(Session::has('messagehapus'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">                            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('messagehapus') }}</strong>
        </div>    
        @endif 
        <div class="card">
            <h4 class="m-t-0 header-title">Daftar Informasi</h4>
            {{-- <p class="text-muted m-b-30 font-13"> Include pagination in your FooTable. </p> --}}
            <label class="form-inline mb-3"> Show
                <select id="demo-show-entries" class="form-control form-control-sm ml-1 mr-1">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
                entries </label>
            <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5">
                <thead>
                    <tr>
                        <th> id </th>
                        <th> Judul Informasi </th>
                        {{-- <th> Gambar </th> --}}
                        <th> Tgl.Buat </th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($r as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->judul}}</td>
                        {{-- <td><img src="{{ asset('/images/info/'.$item->gambar) }}" style="height: 50px; width: 50px;" alt=""></td> --}}
                        <td>{{$item->created_at}} <br> <small>Oleh: {{ $item->create_user }}</small> </td>
                        <td><a href="{{ url('info-updt/'.$item->id) }}" class="btn btn-sm btn-info"><i
                                    class="fa fa-pen"></i> Ubah</a>
                            <a href="{{ url('info-del/'.$item->id) }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="active">
                        <td colspan="5">
                            <div class="text-right">
                                <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10">
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
    
<script>
    jQuery(document).ready(function ($) {
        $('#demo-foo-pagination').DataTable();
    });

</script>
<script>
    $('#summernote').summernote({
      placeholder: 'Isi Keterangan',
      tabsize: 10,
      height: 100
    });
  </script>
@endsection
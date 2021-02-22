@extends('layouts.admin.index')
@section('head-section')
{{-- <h2>Daftar Kategori</h2> --}}
@endsection
@section('content')
<div class="row">
    <div class="col-md-4">
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
            <h4>
                Tambah Subkategori Wisata
            </h4>
            <form class="forms-sample" method="POST" action="{{ route('createSK') }}">
              @csrf
                <div class="form-group">
                    <label for="idkategori">Kategori</label>
                    <select class="form-control" id="idkategori" name="idkategori">
                        <option value="#">--- PILIH ---</option>
                        @foreach ($r as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Subkategori</label>
                    <div>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Sub Kategori">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-danger mr-2">Batal</button>
            </form>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <h4 class="m-t-0 header-title">Daftar SubKategori</h4>
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
                        {{-- <th data-toggle="true"> id </th> --}}
                        <th> Nama SubKategori </th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sk as $item)
                    <tr>
                        {{-- <td>{{$item->id}}</td> --}}
                        <td>{{$item->namasub}} <br> <small>{{ $item->nama }}</small></td>
                        <td><a href="{{ url('subkategori-ubah/'.$item->idsub) }}" class="btn btn-sm btn-info"><i
                                    class="fa fa-pen"></i> Ubah</a>
                            <a href="{{ url('subkategori-hapus/'.$item->idsub) }}" class="btn btn-sm btn-danger"
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
    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>
@endsection

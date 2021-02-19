@extends('layouts.admin.index')
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
                Tambah Transportasi
            </h4>
            <form class="forms-sample" method="POST" action="{{ route('createT') }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="kendaraan">Kendaraan</label>
                    <div>
                        <input type="text" class="form-control" name="kendaraan" id="kendaraan" placeholder="Kendaraan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <div>
                        <input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Tujuan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <div>
                        <textarea class="form-control" name="keterangan" id="keterangan" rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <div>
                        <input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off" class="form-control-file">
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
            @if(Session::has('messageehapus'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">                            
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session('messageehapus') }}</strong>
            </div>    
            @endif 
        <div class="card">
            <h4 class="m-t-0 header-title">Daftar Transportasi</h4>
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
                        <th> Kendaraan </th>
                        <th> Tujuan </th>
                        {{-- <th> Gambar </th> --}}
                        <th> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($r as $item)
                    <tr>
                        <td> <a href="{{ url('trans-dtl/'.$item->id) }}"><strong style="color: blue">{{$item->kendaraan}}</strong></a></td>
                        <td>{{$item->tujuan}}</td>
                        {{-- <td><img src="{{asset('images/transportasi/'.$item->gambar)}}"></td> --}}
                        <td><a href="{{ url('trans-updt/'.$item->id) }}" class="btn btn-sm btn-info"><i
                                    class="fa fa-pen"></i> Ubah</a>
                            <a href="{{ url('trans-del/'.$item->id) }}" class="btn btn-sm btn-danger"
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
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>
@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-md-12">
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
            <h4 class="m-t-0 header-title">Daftar bookingan</h4>
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
                        <th> Nama Wisata</th>
                        <th> kuota/orang </th>
                        <th> Status </th>
                        <th> Tgl.Buat </th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($r as $item)
                    <tr >
                        <td><strong>{{$item->nama_wisata}}</strong> <br>pemesan: {{$item->nama_user}} (email: {{ $item->email_user }})</td>
                        <td>{{$item->kuota}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->created_at}}</td>
                        <td><a href="{{ url('admin-booking-approve/'.$item->id) }}" class="btn btn-sm btn-success"><i
                                    class="fa fa-check"></i> Terima</a>
                            <a href="{{ url('admin-booking-reject/'.$item->id) }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('apakah anda yakin?')"><i class="fa fa-times"></i> Reject</a>
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
        <div class="card">
            <h4 class="m-t-0 header-title">Daftar histori bookingan</h4>
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
                        <th> Nama pemboking </th>
                        <th> kuota/orang </th>
                        <th> Status </th>
                        <th> Tgl.Buat </th>
                        {{-- <th> Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($h as $item)
                    <tr >
                        <td><strong>{{$item->nama_wisata}}</strong> <br>pemesan: {{$item->nama_user}}</td>
                        <td>{{$item->kuota}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->created_at}}</td>
                        {{-- <td><a href="{{ url('admin-booking-approve/'.$item->id) }}" class="btn btn-sm btn-success"><i
                                    class="fa fa-check"></i> Terima</a>
                            <a href="{{ url('admin-booking-reject/'.$item->id) }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('apakah anda yakin?')"><i class="fa fa-times"></i> Reject</a>
                        </td> --}}
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

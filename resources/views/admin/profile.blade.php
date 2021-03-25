@extends('layouts.admin.index')
@section('content')
<div class="col-md-12">
    <div class="card">
        <h4>
            Ubah Informasi
        </h4>
        <form class="forms-sample">
          @csrf
          <div class="form-group">
            <label for="name">Nama</label>
            <div>
                <input type="text" class="form-control" name="name" id="name" value="{{ $r->name }}">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <div>
                <textarea class="form-control" name="email" id="email" rows="4">{{ $r->email }}</textarea>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
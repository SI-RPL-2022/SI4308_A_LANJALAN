@extends('dashboardtravel.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div>
            <h2>Tambah Bundle Wisata</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('bundles.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Bundle</label>
        <input type="text" class="form-control" id="judulBundle" placeholder="Nama Bundle" name="judulBundle">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga Bundle</label>
        <input type="text" class="form-control" id="hargaBundle" placeholder="Harga Bundle" name="hargaBundle">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Bundle</label>
        <textarea class="form-control" id="deskripsiBundle" rows="3" name="deskripsiBundle"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Expired Bundle</label>
        <input type="date" class="form-control" id="tanggalExpBundle" placeholder="Tanggal Expired Bundle" name="tanggalExpBundle">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   
</form>
@endsection
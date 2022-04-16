@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div>
            <h2>Tambah Wisata</h2>
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
   
<form action="{{ route('wisatas.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Wisata</label>
        <input type="text" class="form-control" id="namaWisata" placeholder="Nama Wisata" name="namaWisata">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga</label>
        <input type="text" class="form-control" id="hargaWisata" placeholder="Harga Wisata" name="hargaWisata">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsiWisata" rows="3" name="deskripsiWisata"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Lokasi Wisata</label>
        <input type="text" class="form-control" id="lokasiWisata" placeholder="Lokasi Wisata" name="lokasiWisata">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   
</form>
@endsection
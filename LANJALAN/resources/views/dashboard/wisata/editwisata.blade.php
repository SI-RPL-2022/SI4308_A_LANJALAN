@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div>
            <h2>Edit Wisata Post</h2>
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
   
<form action="{{ route('wisatas.update',$wisata->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama wisata</label>
        <input type="text" class="form-control" id="namaWisata" placeholder="Nama wisata" name="namaWisata" value="{{ $wisata->namaWisata }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga wisata</label>
        <input type="text" class="form-control" id="hargaWisata" placeholder="Harga wisata" name="hargaWisata" value="{{ $wisata->hargaWisata }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi wisata</label>
        <textarea class="form-control" id="deskripsiWisata" rows="3" name="deskripsiWisata">{{ $wisata->deskripsiWisata }}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Lokasi Wisata</label>
        <input type="text" class="form-control" id="lokasiWisata" placeholder="Lokasi Wisata" name="lokasiWisata" value="{{ $wisata->lokasiWisata }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   
</form>
@endsection
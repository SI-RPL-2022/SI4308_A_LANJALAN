@extends('layoutsmain.main')

@section('container')
    <div class="p-5 m-5">
    <!-- show Detail Wisata -->
            <div class="mb-3">
                <h3 class="text-center">{{ $detailwisata->namaWisata }}</h3>
            </div>

            <div class="text-center m-5">
            <img class= "w-50" src="/img/papuma.jpg" alt=" ">
            </div>
            <hr>
            <form class="me-auto">
                <div class="mb-3">
                    <label  class="form-label fw-bold">Harga :</label>
                    <p>Rp{{ $detailwisata->hargaWisata }}</p>
                </div>
                <div class="mb-3">
                    <label  class="form-label fw-bold">Deskripsi :</label>
                    <p>{{ $detailwisata->deskripsiWisata }}</p>
                </div>
                <div class="mb-3">
                    <label  class="form-label fw-bold">Lokasi :</label>
                    <p>{{ $detailwisata->lokasiWisata }}</p>
                </div>
                <div class="d-grid">
                    <a  href="{{route('pesan', ['id' => $detailwisata->id])}}" class="btn btn-success ">Pesan Sekarang - Rp{{ $detailwisata->hargaWisata }}</a>
                </div>
            </form>
    </div>   
@endsection
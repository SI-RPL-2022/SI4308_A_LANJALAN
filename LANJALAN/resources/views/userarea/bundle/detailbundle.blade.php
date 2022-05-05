@extends('layoutsmain.main')

@section('container')
    <div class="p-5 m-5">
    <!-- show Detail Wisata -->
            <div class="mb-3">
                <h3 class="text-center">{{ $detailbundle->judulBundle }}</h3>
            </div>

            <div class="text-center m-5">
            <img class= "w-50" src="{{ asset('storage/' . $detailbundle->image)  }}" alt=" ">
            </div>
            <hr>
            <form class="me-auto">
                <div class="mb-3">
                    <label  class="form-label fw-bold">Harga :</label>
                    <p>Rp{{ $detailbundle->hargaBundle }}</p>
                </div>
                <div class="mb-3">
                    <label  class="form-label fw-bold">Deskripsi :</label>
                    <p>{{ $detailbundle->deskripsiBundle }}</p>
                </div>
                <div class="mb-3">
                    <label  class="form-label fw-bold">Tanggal Expired :</label>
                    <p>{{ $detailbundle->tanggalExpBundle }}</p>
                </div>
                <div class="d-grid">
                    <a href="{{route('showBundle', ['id' => $detailbundle->id])}}" type="submit" class="btn btn-success ">Pesan Sekarang - Rp{{ $detailbundle->hargaBundle }}</a>
                </div>
            </form>
    </div>   
@endsection
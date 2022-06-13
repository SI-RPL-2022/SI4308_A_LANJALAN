@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Pesanan</h1>
</div>
<br>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($pesanan->count())

<div class="container">
<table class="table table-hover ">
    <thead class="bg-light " style="vertical-align: middle; text-align:center;">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Wisata</th>
        <th>Bundle</th>
        <th>Travel Agent</th>
        <th>Tanggal </th>
        <th>Total Harga</th>
        <th>Bukti Transfer</th>
        <th>Status</th>
    </tr>
    </thead>
    @php
        $i = 0;
    @endphp
    <tbody style="vertical-align: middle; text-align:center;">
    @foreach ($pesanan as $p)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $p->namaPemesan }}</td>
        <td>{{ $p->noTelepon }}</td>
        <td>
            @if( $p->wisata == null)
            <small class="text-secondary">-</small>
            @else
            <small>{{ $p->wisata->namaWisata }}</small>
            @endif
        </td>
        <td>
            @if( $p->bundle == null)
            <small class="text-secondary">-</small>
            @else
            <small>{{ $p->bundle->judulBundle }}</small>
            @endif
        </td>
        <td>{{ $p->travel_agent->name }}</td>
        <td>{{ $p->tanggal }}</td>
        <td>Rp{{ $p->totalHarga }}</td>
        <td>
            @if( $p->buktiTf == "Belum Ada Foto")
            <small class="text-danger" >{{ $p->buktiTf }}</small>
            @else
            
            @endif
        </td>
        <td>
            @if( $p->status == "Belum Kirim Bukti")
            <small class="text-danger" >{{ $p->status }}</small>
            @else
            <small class="text-primary">{{ $p->status }}</small>
            @endif
        </td>
            @if( $p->status == "Bukti Terkirim - Menunggu Verifikasi")
                <td>
                <form action="{{ route('verifikasi', $p->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <button class="btn btn-warning" type="submit" name="submit">Verifikasi</button>
                    <input hidden type="text" class="form-control" id="status" name="status" value="Telah Diverifikasi"></form></td>
                <td>
                <form action="{{ route('verifikasi', $p->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <button class="btn btn-danger" type="submit" name="submit">Tolak</button>
                    <input hidden type="text" class="form-control" id="status" name="status" value="Pembelian Gagal"></form>
                </td>
                @else
                <td>        </td>
            @endif         
    </tr>
    @endforeach
</tbody>
</table>
</div>
<div class="row text-center">
    {{-- {!! $pesanan->links() !!} --}}
</div>
</div>
@else
<p class="text-center fs-5 fw-bold p-0 m-0">Belum Ada Pesanan Apapun</p>
<p class="text-center p-0 m-0">Silahkan cari wisata yang ingin anda pesan!</p>
@endif


@endsection
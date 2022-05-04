@extends('layoutsmain.main')

@section('container')
<div class="p-5 my-5 mx-3">
<div class="row ">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Daftar Riwayat Pesanan</h2>
        </div>
        
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($pesanan->count())

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Pemesan</th>
        <th>No Telepon</th>
        <th>Wisata</th>
        <th>Bundle</th>
        <th>Travel Agent</th>
        <th>Status</th>
        <th>Bukti Transfer</th>
        <th>Tanggal Keberangkatan</th>
        <th width="280px">Action</th>
    </tr>
    @php
        $i = 0;
    @endphp
    @foreach ($pesanan as $p)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $p->namaPemesan }}</td>
        <td>{{ $p->noTelepon }}</td>
        <td>{{ $p->wisata_id }}</td>
        <td>{{ $p->bundle_id }}</td>
        <td>{{ $p->travelAgent_id }}</td>
        <td>{{ $p->status }}</td>
        <td>{{ $p->buktiTf }}</td>
        <td>{{ $p->tanggal }}</td>
        <td>
                @if( $p->status == "Belum Kirim Bukti")
                <a class="btn btn-warning" href="/konfirmasi/{{$p->id}}">Pembayaran</a>
                @else
                <a class="btn btn-info" href="/tiketpesanan/{{$p->id}}">Lihat Pesanan</a>
                @endif

                <a href="{{ route('deletepesanan', ['id' => $p->id]) }}" type="submit" class="btn btn-danger">Batalkan</a>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {{-- {!! $pesanan->links() !!} --}}
</div>
</div>
@else
<p class="text-center fs-5 fw-bold p-0 m-0">Belum Ada Pesanan Apapun</p>
<p class="text-center p-0 m-0">Silahkan cari wisata yang ingin anda pesan!</p>
@endif  
@endsection
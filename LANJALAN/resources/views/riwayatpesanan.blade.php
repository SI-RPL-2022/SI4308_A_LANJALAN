@extends('layoutsmain.main')

@section('container')
<div class="p-5 my-5 mx-3">
<div class="bg-success rounded-2 text-center py-2">
    <h2 class="fw-bold text-light">Daftar Riwayat Pesanan</h2>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($pesanan->count())

<table class="table table-hover ">
    <thead class="bg-light " style="vertical-align: middle; text-align:center;">
    <tr>
        <th>No</th>
        <th>Nama Pemesan</th>
        <th>No Telepon</th>
        <th>Wisata</th>
        <th>Bundle</th>
        <th>Travel Agent</th>
        <th>Tanggal Keberangkatan</th>
        <th>Total Harga</th>
        <th>Bukti Transfer</th>
        <th>Status</th>
        <th width="280px">Action</th>
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
            <small class="text-secondary">Tidak Ada</small>
            @else
            <small>{{ $p->wisata->namaWisata }}</small>
            <img class="w-100" src="{{ asset('storage/' . $p->wisata->image)  }}">
            @endif
        </td>
        <td>
            @if( $p->bundle == null)
            <small class="text-secondary">Tidak Ada</small>
            @else
            <small>{{ $p->bundle->judulBundle }}</small>
            <img class="w-100" src="{{ asset('storage/' . $p->bundle->image)  }}">
            @endif
        </td>
        <td>
            @if( $p->travel_agent == null)
            <small class="text-secondary">Tidak Ada</small>
            @else
            <small>{{ $p->travel_agent->name }}</small>
            <img class="w-100" src="{{ asset('storage/' . $p->travel_agent->image)  }}">
            @endif
        </td>
        <td>{{ $p->tanggal }}</td>
        <td>Rp{{ $p->totalHarga }}</td>
        <td>
            @if( $p->buktiTf == "Belum Ada Foto")
            <small class="text-danger" >{{ $p->buktiTf }}</small>
            @else
            <img class="w-50" src="img/images/{{ $p->buktiTf }}">
            @endif
        </td>
        <td>
            @if( $p->status == "Belum Kirim Bukti")
            <small class="text-danger" >{{ $p->status }}</small>
            @else
            <small class="text-primary">{{ $p->status }}</small>
            @endif
        </td>
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
</tbody>
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
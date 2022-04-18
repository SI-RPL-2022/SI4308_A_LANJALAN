@extends('dashboardtravel.layouts.main')

@section('container')
<div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Daftar Tiket Bundle</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href=""> Tambah Tiket Bundle Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul Tiket Bundle</th>
            <th>Harga Tiket Bundle</th>
            <th>Tanggal Expired Tiket Bundle</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bundles as $bundle)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $bundle->judulBundle }}</td>
            <td>{{ $bundle->hargaBundle }}</td>
            <td>{{ $bundle->tanggalExpBundle }}</td>
            <td>
                <form action="" method="POST">
   
                    <a class="btn btn-info" href="">Show</a>
    
                    <a class="btn btn-primary" href="">Edit</a>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $bundles->links() !!}
    </div>
@endsection
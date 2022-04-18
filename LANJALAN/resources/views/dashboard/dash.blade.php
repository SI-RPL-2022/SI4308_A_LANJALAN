@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar"></span>
      This week
    </button>
  </div>
</div>


<h4>Tabel Pinjam</h4>
<div class="table-responsive">
  <table class="table table-striped mt-2">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php 
          // $no = 1; 
          ?>
        {{-- @foreach($vaccine as $v) --}}
        <tr>
            <th scope="row">1</th>
            <td>nama</td>
            <td>Email@domain.com</td>
            <td>tanggal</td>
            <td>Rp </td>
            <td><form action="" method="POST"><div class="d-flex">
              <div class="me-4">
                <select class="form-control" id="status" name="status">
                      <option selected>Pilih</option>
                      <option value="Dikonfirmasi">Dikonfirmasi</option>
                      <option value="Dikemas">Dikemas</option>
                      <option value="Dikirim">Dikirim</option>
                      <option value="Selesai">Selesai</option>
                </select>
              </div>
              <div> <input type="text" name="pinjam_id" value=" " hidden> 
              <button name="submit" type="submit" class="btn btn-primary ms-3">Ubah</button>
              </div>
            </div></form> </td>
            
        </tr>
        <?php 
        // $no++; 
        ?>
        {{-- @endforeach --}}
    </tbody>
</table>
</div>    
@endsection
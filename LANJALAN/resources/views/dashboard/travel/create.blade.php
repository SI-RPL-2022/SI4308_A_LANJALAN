@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div>
            <h2>Tambah Travel Agen</h2>
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
   
<form action="{{ route('travels.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Travel Agen</label>
        <input type="text" class="form-control" id="name" placeholder="Nama Travel Agen" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" placeholder="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   
</form>
@endsection
@extends('dashboard.layouts.main')

@section('container')
<div class="pt-5">
<h2>Travel Detail</h2>
<div class="mt-3 mb-3">
    <div class=" ">
        <a href="/" class="btn btn-primary">Edit</a>
        <a href="/" class="btn btn-danger">Delete</a>
    </div>
</div>
   <!-- show buku -->
        <div class="text-center m-5">
        <img class= "w-50" src="/img/travel.jpg" alt=" ">
        </div>
        <hr>
         <form class="me-auto">
         <?php 
         ?>
            <div class="mb-3">
                <label  class="form-label fw-bold">Nama Travel :</label>
                <p>{{ $detailtravel->name }}</p>
            </div>
            <div class="mb-3">
                <label  class="form-label fw-bold">Email :</label>
                <p>{{ $detailtravel->email }}</p>
            </div>
            <div class="mb-3">
                <label  class="form-label fw-bold">Username :</label>
                <p>{{ $detailtravel->username }}</p>
            </div>
            <div class="mb-3">
                <label  class="form-label fw-bold">Password :</label>
                <p>{{ $detailtravel->password }}</p>
            </div>
        </form>
    </div>
  </div>
  </section>
</div> 
@endsection
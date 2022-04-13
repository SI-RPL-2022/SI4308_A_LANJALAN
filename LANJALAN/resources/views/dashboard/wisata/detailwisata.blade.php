@extends('dashboard.layouts.main')

@section('container')
<div class="pt-5">
<h2>Wisata Post</h2>
<div class="mt-3 mb-3">
<a href="/" class="btn btn-primary">Tambah Post Wisata</a>
</div>
   <!-- show buku -->
   <h1 class="fw-bold text-center">Detail Buku</h1>
        <div class="text-center m-5">
        <img class= "w-50" src= " " alt=" ">
        </div>
        <hr>

         <form class="me-auto">
         <?php 
         ?>
            <div class="mb-3">
                <label for="judul_buku" class="form-label fw-bold">Judul :</label>
                <p>andra</p>
            </div>
            <div class="mb-3">
                <label for="penulis_buku" class="form-label fw-bold">Penulis :</label>
                <p>lutfi</p>
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label fw-bold">Tahun Terbit :</label>
                <p>karisma</p>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi :</label>
                <p>nabeel</p>
            </div>
            <div class="mb-3">
                <label for="Bahasa" class="form-check-label fw-bold pe-3">Bahasa :</label>
                <p>lalala</p>
            </div>
            <div class="mb-3">
                <label for="tag" class="form-check-label fw-bold pe-3">Tag :</label>
                <p></p>
            </div>
         
            <div class="row row-cols-lg-auto justify-content-center ">
                <button class="btn btn-primary me-2 ms-2 " style="width: 400px;" type="button" data-bs-toggle="modal" data-bs-target="#modalsunting">Sunting</button>
                <a class="btn btn-danger me-2 ms-2 " style="width: 400px;" type="submit" href="delete.php?id_buku=<?= $show['id_buku'] ?>">Hapus</a>
            </div>
            <?php 
        ?>
        </form>
    </div>
  </div>
  </section>
</div> 
@endsection
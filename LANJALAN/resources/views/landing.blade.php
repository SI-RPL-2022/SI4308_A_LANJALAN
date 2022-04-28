@extends('layouts.main')

@section('container')
<div style="background-image: url({{ asset('img/RajaAmpat.png') }}); height: 100vh ; ">
    <div class="p-5  text-center ">
        <div class="p-5">
            <div class="p-5">
                <p class="text-center fs-1 fw-bolder" style="color: #FFFFFF; ">
                    Make The Best Out of Your
                    <br>
                    Travelling Experience
                </p>
                <p class="text-center fs-3" style="color: #FFFFFF;">
                    Travel With Us Now
                </p>
                <a href="">
                    <button type="button" class="btn btn-lg btn-primary" style="margin-top: 1rem; border-radius: 0.75rem">Book Now</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="px-5 mx-5">
{{-- wisata --}}
    <div class="container pt-4">
        <h3 class="text-center p-1">Wisata</h3>
        <p class="text-secondary px-5 text-center">Pergi ke wisata paling populer di Indonesia dimanapun yang kamu mau!</p>
        @if ($wisatas->count())
        {{-- card --}}
                    <div class="flex-wrap justify-content-center d-flex py-3">
                        @foreach ($wisatas as $p)
                            
                        <div class="mx-2 my-2">
                            <a href="/detailwisata/{{ $p->id }}" class="text-decoration-none link-dark">
                                <div class="card border-0" style="width: 14rem;">
                                    <img src="img/papuma.jpg" class="card-img-top  imgcard" alt="">
                                    <div class="pt-2">
                                        <h6 class=" mb-0">{{ $p->namaWisata}}</h6>
                                        <small class="card-text p-0 m-0">{{ $p->lokasiWisata }}</small>
                                        <p class="card-text p-0 m-0 text-secondary">Rp{{ $p->hargaWisata }}</p>
                                        
                                    </div>
                                </div>
                            </a>
                        </div>

                        @endforeach

                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        {{ $wisatas->links('pagination::bootstrap-4') }}   
                    </div> 
        {{-- card close --}}
        @else
        <p class="text-center fs-5 fw-bold p-0 m-0">No Wisata Post Found.</p>
        <p class="text-center p-0 m-0">Please wait for the maintenance</p>
        @endif   
    </div>
{{-- wisata close --}}

{{-- bundle --}}

{{-- bundle close --}}

{{-- Travel agent --}}
    <div class="container pt-4">
        <h3 class="text-center p-1">Our Travel Agents</h3>
        <p class="text-secondary px-5 text-center">Kami bekerja sama dengan berbagai jaringan travel agent di seluruh dunia untuk memastikan kenyamanan Anda saat berpergian di belahan dunia manapun!</p>

        @if ($travelagentpost->count())
        {{-- card --}}
                    <div class="flex-wrap justify-content-center d-flex py-3">
                        @foreach ($travelagentpost as $p)
                            
                        <div class="mx-2 my-2">
                            <a href="/detailwisata/{{ $p->id }}" class="text-decoration-none link-dark">
                                <div class="card border-0" style="width: 14rem;">
                                    <img src="img/papuma.jpg" class="card-img-top  imgcard" alt="">
                                    <div class="pt-2">
                                        <h6 class=" mb-0">{{ $p->name}}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>

                        @endforeach

                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        {{ $travelagentpost->links('pagination::bootstrap-4') }}   
                    </div> 
        {{-- card close --}}
        @else
        <p class="text-center fs-5 fw-bold p-0 m-0">No Travel Agent Post Found.</p>
        <p class="text-center p-0 m-0">Please wait for the maintenance</p>
        @endif   
    </div>
{{-- Travel Agent close --}}

</div>
@endsection


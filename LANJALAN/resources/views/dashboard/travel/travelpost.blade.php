@extends('dashboard.layouts.main')

@section('container')
<div class="pt-5">
<h2>Travel Post</h2>
<div class="mt-3 mb-3">
<a href="{{ route('travels.create') }}" class="btn btn-primary">Tambah Travel Agen</a>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@if ($travelagentpost->count())
{{-- card --}}
            <div class="flex-wrap justify-content-center d-flex py-3">
                @foreach ($travelagentpost as $p)
                    
                <div class="mx-2 my-2">
                    <a href="/detailtravel/{{ $p->id }}" class="text-decoration-none link-dark">
                        <div class="card " style="width: 16rem;">
                            <img src="img/travel.jpg" class="card-img-top imgcard" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->name}}</h5>
                                <p class="card-text p-0 m-0 text-wrap">{{ $p->email }}</p>
                                <div class="mt-2">
                                    <a href="">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                    <a href="{{ route('deletetravelpost', ['id' => $p->id , 'email' => $p->email]) }}">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </div>
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
<p class="text-center p-0 m-0">Please add some Travel in Tambah Post Travel</p>
@endif   
</div> 
@endsection
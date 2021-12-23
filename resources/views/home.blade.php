@extends('layouts.main')

@section('container')
<div class="card justify-content-center mb-5 img-fluid">
    {{-- <img src="/img/dannyachram.jpg" class="card-img-top" alt="..."> --}}
    <img src="img/{{ $image }}" alt={{ $name }} width="200" class="img-thumbnail rounded-circle mx-auto d-block mt-3"> 
    <div class="card-body text-center">
      <h5 class="card-title">{{ $name }}</h5>
      <p class="card-text fw-bold">"SEMUA YANG ADA PASTI AKAN TIADA"</p>
      <a href="/login" class="btn btn-primary">LOGIN</a>
    </div>
  </div>

@endsection


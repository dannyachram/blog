@extends('layouts.main')


@section('container')

    <div class="card justify-content-center mb-5 img-fluid">
        <H1 class="title-name justify-content-center">{{ $title }}</H1>
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt={{ $name }} width="200" class="img-thumbnail rounded-circle"> 
    </div>




@endsection


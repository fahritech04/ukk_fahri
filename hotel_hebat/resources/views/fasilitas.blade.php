@extends('layouts.app')

@section('title', 'Fasilitas')

@section('content')
<div class="container mt-5 border-top">
  <div class="row">
    <h1 class="col mt-5">Fasilitas Hotel</h1>
    <div class="col mt-5">
      <a href="{{ route('fasilitas.create') }}" class="btn btn-primary float-end">Tambah +</a>
    </div>
  </div>
  
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 border-top">
  @foreach ($data as $fasilitas)
 {{-- fasilitas --}}
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('img/tipe_2.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $fasilitas->fasilitas_hotel }}</h5>
        <p class="card-text">{{ $fasilitas->keterangan }}</p>
      </div>
    </div>
  </div>
  
  @endforeach
</div>
</div>
@endsection
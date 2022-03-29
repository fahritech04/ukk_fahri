@extends('layouts.app')

@section('title', 'Fasilitas')

@section('content')
<div class="container mt-5 border-top">
 {{-- fasilitas --}}
 <h1>Fasilitas</h1>
 <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('img/tipe_1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lorem Ipsum</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, minima?</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('img/tipe_2.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lorem Ipsum</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, asperiores.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('img/tipe_3.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lorem Ipsum</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, architecto.</p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
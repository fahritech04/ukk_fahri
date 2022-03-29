@extends('layouts.header')

@section('title', 'Tambah Hotel')

@section('content')
{{-- container --}}
<div class="container mt-5">
 <div class="card">
  <div class="card-header">
    Resepsionis
  </div>

  {{-- table --}}
  <table class="table">    
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Tamu</th>
        <th scope="col">Email</th>
        <th scope="col">Nomor Handphone</th>
        <th scope="col">Tanggal Check In</th>
        <th scope="col">Tanggal Check Out</th>
      </tr>
    </thead>
    @foreach ($data as $resepsionis)      
    <tbody>
      <tr>
        <th scope="row">{{ $resepsionis->id }}</th>
        <td>{{ $resepsionis->nama }}</td>
        <td>{{ $resepsionis->email }}</td>
        <td>{{ $resepsionis->no_hp }}</td>
        <td>{{ $resepsionis->tanggal_checkin }}</td>
        <td>{{ $resepsionis->tanggal_checkout }}</td>
      </tr>
    </tbody>
    @endforeach
  </table>

</div>

</div>
@endsection
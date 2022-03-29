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
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>

</div>

</div>
@endsection
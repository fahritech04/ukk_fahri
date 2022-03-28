@extends('layouts.main')

@section('title', 'Tambah Hotel')

@section('content')
<div class="container mt-5">
 {{-- table --}}
 <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Kelas</th>
      {{-- <th scope="col">Action</th> --}}
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Muhammad Raihan Fahrifi</td>
      <td>Rekayasa Perangkat Lunak</td>
      <td>XII RPL</td>
      {{-- <td>
       <div class="row">
         <div class="col">
           <a href="{{ route('students.edit', $row) }}" class="btn btn-success">Edit</a>
         </div>
         <div class="col">
           <form action="{{ route('students.destroy', $row) }}" method="post">
             @csrf
             @method('delete')
               <input type="submit" class="btn btn-danger" value="Delete">
           </form>
         </div>
       </div>
 
     </td> --}}
    </tr>
  </tbody>  
</div>
@endsection
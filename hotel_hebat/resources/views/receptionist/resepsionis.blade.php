<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Resepsionis</title>

 {{-- CDN Bootstrap --}}
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
 <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
{{-- Header --}}
 <header class="p-4 bg-dark text-white">
  <div class="container">
  </div>
</header>

<div class="container">
 <div class="card mt-3">
  <div class="card-body">
  <h1>Resepsionis</h1>
  {{-- tanggal dan search --}}
  <header class="p-3 bg-dark text-white">
   <div class="container">
     <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <form class="col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <input type="search" class="form-control form-control-dark" placeholder="Cari Tanggal" aria-label="Search">
      </form>
      

       <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
         <input type="search" class="form-control form-control-dark" placeholder="Search" aria-label="Search">
       </form>

     </div>
   </div>
 </header>


  {{-- table --}}
 <table class="table border-top">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Tamu</th>
      <th scope="col">Tanggal Check In</th>
      <th scope="col">Tanggal Check Out</th>
      {{-- <th scope="col">Action</th> --}}
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Muhammad Raihan Fahrifi</td>
      <td>15-01-2022</td>
      <td>17-01-2022</td>
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
</div>
</div>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>@yield('title_admin')</title>
 <title>Hotel</title>

 {{-- asset --}}
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
 {{-- Header --}}
 <header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="" class="text-warning text-decoration-none me-2">Dashboard</a>
    </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('admin.hotel') }}" class="nav-link px-2 text-white">Hotel</a></li>
        <li><a href="{{ route('admin.resepsionis') }}" class="nav-link px-2 text-white">Resepsionis</a></li>
        <li><a href="{{ route('admin.reservasi') }}" class="nav-link px-2 text-white">Reservasi</a></li>
      </ul>
    </div>
    
  </div>
</header>

{{-- table --}}
<div class="container mt-5">
<div class="card">
  <div class="card-body">
    <h1>Hotel</h1>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No Handphone</th>
            <th scope="col">Tanggal Check In</th>
            <th scope="col">Tanggal Check Out</th>
            <th scope="col">Jumlah Kamar</th>
          </tr>
        </thead>
        @foreach ($data as $hotel)
        <tbody>
          <tr>
            <th scope="row">{{ $hotel->id }}</th>
            <td>{{ $hotel->nama }}</td>
            <td>{{ $hotel->email }}</td>
            <td>{{ $hotel->no_hp }}</td>
            <td>{{ $hotel->tanggal_checkin }}</td>
            <td>{{ $hotel->tanggal_checkout }}</td>
            <td>{{ $hotel->jumlah_kamar }}</td>
          </tr>
        </tbody>
        @endforeach
        
      </table>
  </div>
</div>
</div>



</body>
</html>
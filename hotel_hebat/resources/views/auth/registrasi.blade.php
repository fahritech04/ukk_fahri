<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Registrasi</title>

 {{-- asset --}}
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
 <div class="container mt-5">

  <div class="card">
   <div class="card-header bg-dark text-white">
     Registrasi - Hotel Hebat
   </div>
   <div class="card-body">
   <form action="/simpanregistrasi" method="post">
    @csrf
    <div class="mb-3">
     <label class="form-label">Nama</label>
     <input type="text" class="form-control" name="name">
    </div>
  
    <div class="mb-3">
     <label class="form-label">Level</label>
     <select class="form-select" aria-label="Default select example" name="level">
      <option selected>Open this select menu</option>
      <option value="admin">admin</option>
      <option value="user">user</option>
      <option value="resepsionis">resepsionis</option>
    </select>
    </div>
  
    <div class="mb-3">
     <label class="form-label">Email</label>
     <input type="email" class="form-control" name="email">
   </div>

    <div class="mb-3">
     <label class="form-label">Password</label>
     <input type="password" class="form-control" name="password">
   </div>

    <div class="mb-3">
     <input type="submit" class="btn btn-primary" value="Simpan">
   </div>
  </form>
   
   </div>
  </div>
  
  </div>
</body>
</html>
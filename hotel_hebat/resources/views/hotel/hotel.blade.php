@extends('layouts.app')

@section('title', 'Hotel Hebat')

@section('content')
<div class="container">
{{-- order --}}
<form class="row gx-3 gy-2 align-items-center mt-5">
 <div class="col">
   <label class="visually-hidden" for="">Tanggal Check In</label>
   <input type="text" class="form-control" placeholder="Jane Doe">
 </div>
 <div class="col">
   <label class="visually-hidden" for="">Tanggal Check Out</label>
   <input type="text" class="form-control" placeholder="Jane Doe">
 </div>
 <div class="col">
   <label class="visually-hidden" for="">Jumlah Kamar</label>
   <input type="text" class="form-control" placeholder="Jane Doe">
 </div>
 <div class="col-auto">
  <a href="#" class="btn btn-primary">Submit</a>
 </div>
</form>

{{-- Quote --}}
<figure class="text-center mt-5">
 <blockquote class="blockquote">
   <h2>Tentang Kami</h2>
 </blockquote>
 <figcaption class="blockquote-footer mt-3">
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ut culpa vitae quas earum voluptatibus eum quae, harum veritatis dolorem amet praesentium alias dolorum assumenda non, delectus incidunt. Non maiores pariatur aspernatur autem, rem natus repudiandae vero. Hic, optio rerum impedit voluptas magni veniam laudantium beatae doloribus assumenda tempore quam architecto, recusandae exercitationem earum soluta nostrum repellendus alias accusantium eveniet voluptatem eum. Vero maxime soluta alias quia fuga deleniti nam, praesentium corporis suscipit illum tenetur tempore blanditiis dolorum accusantium rem temporibus ad quo, excepturi enim, voluptatem autem? Impedit fugiat vel reiciendis nam fuga facere voluptatibus, architecto nostrum similique. Sit, quos.</p>
 </figcaption>
</figure>

</div>
@endsection
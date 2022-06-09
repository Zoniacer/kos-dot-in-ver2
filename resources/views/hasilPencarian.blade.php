@extends('template.navbar_footer')
@section('title')
Cari
@endsection

<style>
.cover {

}
</style>

@section('isi')

@forelse ($kos as $k)
<div class="card mx-auto" style="width:70%;">
  <div class="card-body">
      <div class="row">
          <div class="col-md-4">
            <a href="detail/{{ $k->id }}">
              <img class="cover img-fluid" src="{{ asset('storage/covers/'.$k->coverPath) }}" alt="Cover">
            </a>
          </div>
          <div class="col-md-8">
            <a href="detail/{{ $k->id }}">
              <h3>{{ $k->name }}</h3>
            </a>
              <p>{{ $k->deskripsi }}</p>
          </div>
      </div>
  </div>
</div>
@empty
<div class="card mx-auto" style="width:70%;">
  <div class="card-body">
      <h2>Kos tidak ditemukan...</h2>
  </div>
</div>
@endforelse

@endsection
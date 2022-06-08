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
            <img class="cover img-fluid" src="{{ URL::to('/') }}/covers/{{ $k->coverPath }}" alt="Cover">
          </div>
          <div class="col-md-8">
            <h3>{{ $k->name }}</h3>
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
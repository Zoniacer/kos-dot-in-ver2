@extends('template.navbar_footer')
@section('title')
Rooms
@endsection

@section('isi')

@forelse ($rooms as $room)
<div class="card mt-5" style="width:50%;">
  <div class="card-body">
      <a href="room/{{ $room->id }}">
          <h3>{{ $room->title }}</h3>
          <img src="{{ URL::to('/') }}/images/{{ $room->imagePath }}" alt="Room">
      </a>
  </div>
</div>
@empty
<div class="card" style="width:50%;">
  <div class="card-body">
      <h2>Ruangan tidak ditemukan...</h2>
  </div>
</div>
@endforelse

@endsection
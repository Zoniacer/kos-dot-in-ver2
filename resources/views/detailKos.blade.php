@extends('template.navbar_footer')
@section('title')
Detail Kos
@endsection
<style>
.background-box{
    border-radius: 20px;
	background-color:#F8F9FA
    
}
.btn-tier, .btn-tier:active {
	color: #fff;
	background: #33cabb !important;
	border: none;
}	
.btn-tier:hover, .btn-tier:focus {		
	color: #fff;
	background: #31bfb1 !important;
}
</style>
@section('isi')
    <div class="d-flex justify-content-center mt-4">
        <img src="assets/fotokosan/1.jpeg"class="img-fluid rounded background-box m-2" alt="" width="600" height="600">
    </div>
    <div class="container-md mt-2 mb-4">
        <div class="col-12">
            <h2>{{ $kos->nama }}</h2>
            <h3 class="d-flex flex-row-reverse">Rp. {{ $kos->harga }} /Bulan</h3>
        </div>
        <div class="col-3 d-flex justify-content-right">
            <a href="rooms/{{ $kos->id }}" class="btn-tier rounded nav-link mt-1 mr-4">Tour Virtual</a>
        </div>
    </div>
    <div class="container-md mb-3">
        <div class="col-7">
            <h3>Tentang kos</h3>
        </div>
        <div class="col-7 d-flex justify-content-right">
            <dl>
                <p>{{ $kos->deskripsi }}</p>
                <dt>&emsp;{{ $kos->alamat }}</dt>
                <dt>&emsp;{{$kos->kecamatan}}, {{ $kos->kota }}, {{$kos->provinsi}}</dt>
            </dl>
        </div>
    </div>
    <div class="container-md my-3">
        <div class="col-7">
            <h3>Fasilitas</h3>
        </div>
        <div class="col-3 d-flex justify-content-right">
            <dl>
                @if ($kos->ac == 1)
                <dt><img src="assets/details/AC.png" alt="" width="30" height="30">&emsp;AC</dt>
                @endif
                <dt><img src="assets/details/Tidak Listrik.png" alt="" width="30" height="30">&emsp;Listrik {{$kos->listrik}} </dt>

                @if ($kos->wifi == 1)
                <dt><img src="assets/details/Wifi.png" alt="" width="30" height="30">&emsp;Wifi</dt>
                @endif

                <dt><img src="assets/details/Kamar Mandi.png" alt="" width="30" height="30">&emsp;WC {{$kos->wc}} </dt>

                @if ($kos->perabot != NULL)
                <dt><img src="assets/details/Perabot.png" alt="" width="30" height="30">&emsp;Perabotan  {{$kos->perabotan]}} </dt>
                @endif

            </dl>
        </div>
    </div>
    
    
@endsection
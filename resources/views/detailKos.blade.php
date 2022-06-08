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
            <h2>Kost Apik Al Aminy Tipe E Pondokgede Bekasi</h2>
            <h3 class="d-flex flex-row-reverse">Rp. 1.000.000 /Bulan</h3>
        </div>
        <div class="col-3 d-flex justify-content-right">
            <a href="#" class="btn-tier rounded nav-link mt-1 mr-4">Tour Virtual</a>
        </div>
    </div>
    <div class="container-md mb-3">
        <div class="col-7">
            <h3>Tentang kos</h3>
        </div>
        <div class="col-7 d-flex justify-content-right">
            <dl>
                <dt>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas suscipit quis rerum quibusdam eligendi, 
                velit voluptas reiciendis placeat porro iste perferendis odit autem alias. Maiores voluptatum nulla ipsum incidunt.</dt>
                <dt>&emsp;Alamat</dt>
                <dt>&emsp;Kecamatan, Kota, Provinsi</dt>
            </dl>
        </div>
    </div>
    <div class="container-md my-3">
        <div class="col-7">
            <h3>Fasilitas</h3>
        </div>
        <div class="col-3 d-flex justify-content-right">
            <dl>
                <dt><img src="assets/details/AC.png" alt="" width="30" height="30">&emsp;AC</dt>
                <dt><img src="assets/details/Tidak Listrik.png" alt="" width="30" height="30">&emsp;Listrik</dt>
                <dt><img src="assets/details/Wifi.png" alt="" width="30" height="30">&emsp;Wifi</dt>
                <dt><img src="assets/details/Kamar Mandi.png" alt="" width="30" height="30">&emsp;WC</dt>
                <dt><img src="assets/details/Perabot.png" alt="" width="30" height="30">&emsp;Perabotan</dt>
            </dl>
        </div>
    </div>
    
    
@endsection
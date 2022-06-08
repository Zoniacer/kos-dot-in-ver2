@extends('template.navbar_footer')
@section('title')
Sewa Kos
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
    <div class="container">
        <div class="container-md mt-5 row">
            <div class="col-7 background-box">
                <img src="assets/fotokosan/1.jpeg"class="img-fluid rounded m-2" alt="" width="600" height="600">
            </div>
            <div class="col-4 center background-box">
                    <img src="assets/fotokosan/1.jpeg"class="img-fluid rounded m-1" alt="" width="300" height="300">
                    <img src="assets/fotokosan/1.jpeg"class="img-fluid rounded m-1" alt="" width="300" height="300">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container-md mt-2 mb-5">
            <div class="col-7">
                <h2>Kost Apik Al Aminy Tipe E Pondokgede Bekasi</h2>
            </div>
            
            <div class="col-3 float-right">
                <a href="#" class="btn-tier rounded nav-link mt-1 mr-4">Rp. 100.000/Malam</a>
            </div>
        </div>
    </div>
    
@endsection
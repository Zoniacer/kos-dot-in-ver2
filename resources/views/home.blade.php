@extends('template.navbar_footer')
@section('title')
Home
@endsection

<style>
.col-md-3{
  display: inline-block;
  margin-left:-4px;
}
.col-md-3 img{
  width:100%;
  height:auto;
}
body .carousel-indicators li{
  background-color:#91DD76;
}
body .carousel-control-prev-icon,
body .carousel-control-next-icon{
  background-color:#91DD76;
}
body .no-padding{
  padding-left: 0;
  padding-right: 0;
}
/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
}

.owl-carousel .owl-item {
    transition: all 0.3s ease-in-out;
}

.owl-carousel .owl-item .card {
    padding: 30px;
    position: relative;
}

.owl-carousel .owl-stage-outer {
    overflow-y: auto !important;
    padding-bottom: 40px;
}

.owl-carousel .owl-item img {
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
}

.owl-carousel .owl-item .card .name {
    position: absolute;
    bottom: -20px;
    left: 33%;
    color: #101c81;
    font-size: 1.1rem;
    font-weight: 600;
    background-color: aquamarine;
    padding: 0.3rem 0.4rem;
    border-radius: 5px;
    box-shadow: 2px 3px 15px #3c405a;
}

.owl-carousel .owl-item .card {
    opacity: 0.2;
    transform: scale3d(0.8, 0.8, 0.8);
    transition: all 0.3s ease-in-out;
}

.owl-carousel .owl-item.active.center .card {
    opacity: 1;
    transform: scale3d(1, 1, 1);
}

.owl-carousel .owl-dots {
    display: inline-block;
    width: 100%;
    text-align: center;
}

.owl-theme .owl-dots .owl-dot span {
    height: 20px;
    background: #2a6ba3 !important;
    border-radius: 2px !important;
    opacity: 0.8;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    height: 13px;
    width: 13px;
    opacity: 1;
    transform: translateY(2px);
    background: #83b8e7 !important;
}

@media(min-width: 480.6px) and (max-width: 575.5px) {
    .owl-carousel .owl-item .card .name {
        left: 24%;
    }
}

@media(max-width: 360px) {
    .owl-carousel .owl-item .card .name {
        left: 30%;
    }
}
</style>
@section('isi')
<div class="d-flex justify-content-center my-3">
  <img src="assets/logover2.png" alt="Logo Kos.In" width="200" height="140">
</div>
<div class="text-center">
      <h1>Layanan Kos.In</h1>
</div>
<div class="container my-3 py-3">
  <div class="row">
    <div class="col-3 text-center">
      <img src="assets/details/AC.png" alt="">
      <h2>AC</h2>
    </div>
    <div class="col-3 text-center">
      <img src="assets/details/Kamar Mandi.png" alt="">
      <h2>WC</h2>
    </div>
    <div class="col-3 text-center">
      <img src="assets/details/Perabot.png" alt="">
      <h2>Perabot</h2>
    </div>
    <div class="col-3 text-center">
      <img src="assets/details/Wifi3.png" alt="" width="90" height="58">
      <h2>Wifi</h2>
    </div>
  </div>
</div>
<div class="text-center">
      <h3>Rekomendasi Kos</h3>
</div>
<script>
$(document).ready(function () {
    var silder = $(".owl-carousel");
    silder.owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 50,
        dots: true,
        loop: true,
        responsive: {
            0: { items: 1 },
            480: { items: 2 },
            575: { items: 2 },
            768: { items: 2 },
            991: { items: 3 },
            1200: { items: 4 }
        }
    });
});
</script>
<div id="demo" class="carousel slide mb-5" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <!-- <li data-target="#demo" data-slide-to="2"></li> -->
  </ul>
  
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
      <!-- <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>    -->
      @foreach ($kos as $k)
        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="{{ route('detail-kos', $k->id) }}">
            <img src="{{ asset('storage/covers/'.$k->coverPath) }}">
          </a>
        </div>   
        @if ($loop->index == 3)
          </div>
          <div class="carousel-item">
        @endif
      @endforeach
      <!-- <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>   -->
    </div>
    <!-- <div class="carousel-item">
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>    
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>   
      <div class="col-xs-3 col-sm-3 col-md-3">
        <img src="assets/fotokosan/1.jpeg">
      </div>  
    </div> -->
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">

  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">

  </a>
</div>
<div class="text-center">
      <h3>Kata Mereka</h3>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <div class="owl-carousel owl-theme mt-3 mb-5">
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Denis Richie
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1024311/pexels-photo-1024311.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Lisa Sthalekar
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1036622/pexels-photo-1036622.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Elizabith Richie
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1212984/pexels-photo-1212984.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Daniel Xavier
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1832959/pexels-photo-1832959.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Emma Watson
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/718261/pexels-photo-718261.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Mohammad Imran
                </div>
            </div>
        </div>
    </div>
@endsection

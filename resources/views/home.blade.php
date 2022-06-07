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
</style>
@section('isi')
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
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
    </div>
    <div class="carousel-item">
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
    </div>
    <div class="carousel-item">
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
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    
  </a>
</div>
@endsection

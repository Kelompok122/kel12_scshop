@extends('layouts.app')
@section('content')
<style>
    h2 {
        font-family : Tekton Pro;
    }
</style>
<div class="header_section">
        <div class="banner_section">
            <div class="container-fluid">
                <section class="slide-wrapper">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                    <div class="col-sm-2 padding_0">
                        <p class="mens_taital"></p>
                        <p class="mens_taital_2"></p>
                    </div>
                    <div class="col-sm-5">
                        <div class="banner_taital">
                            <h2 style="color:black" class="mens_text"><strong>Sport Car Elegan</strong></h2>
                            <p style="color:black" class="lorem_text"><b>Kami Menyediakan Berbagai Macam Mobil Sport. Berkualitas! SC.Shop Merupakan Pusat Penyedia Mobil Sport Terbesar di Indonesia</b></p>
                            <button class="buy_bt">Buy Now</a></button>
                            <!--<button class="more_bt">See More</button> -->
                        </div>
                    </div>
                </div>
                </div>
</section>          
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- new collection section start -->
    <div class="layout_padding collection_section">
        <div class="container">
            <section class="page-section" id="services">
		<div class="container">
            <center><h1 class="new_text"><strong>Tersedia Untuk Anda</strong></h1></center>
            <br>
			<hr class="divider my-4">
			<div class="row">
            <div class="col-lg-3 col-md-6 text-center">
  <div class="mt-5">
    <i class="fas fa-4x fa-gem text-primary mb-5"></i>
                <img src="{{ URL::asset('img/fer.png') }}" width="120" height="150">
    <h3 class="h4 mb-2"><b>Ferrari</b> </h3>
    <p class="text-muted mb0">Kelebihannya Adalah : Desain futuristik dan mewah, Kental aura mobil balap, Adopsi teknologi balap F1, Mesin V8 paling powerful, dan Kecepatan super cepat tembus 340 km/jam.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 text-center">
  <div class="mt-5">
    <i class="fas fa-4x fa-laptop-code text-primary mb-5"></i>
                <img src="{{ URL::asset('img/meri.png') }}" width="150" height="150">
    <h3 class="h4 mb-2"><b>Mercedes-Benz</b></h3>
    <p class="text-muted mb0">Kelebihannya Adalah : Desain hatchback, Eksterior lebih modern, dan Mesin dengan  berperforma tangguh, Kecepatan Maxsimal, dan Merupakan Mobil Sport yang elegan</p>
  </div>
</div>
        <div class="col-lg-3 col-md-6 text-center">
  <div class="mt-5">
    <i class="fas fa-4x fa-gem text-primary mb-5"></i>                        
                <img src="{{ URL::asset('img/bmw.png') }}" width="150" height="150">
    <h3 class="h4 mb-2"><b>BMW</b> </h3>
    <p class="text-muted mb0">Kelebihannya Adalah : Tampilan yang sporty, Interior berkualitas tinggi, Fitur keselamatan yang cukup mumpuni,Transmisi ringan, dan Bagasi yang luas.</p>
  </div>
</div>
<div class="col-lg-3 col-md-6 text-center">
  <div class="mt-5">
    <i class="fas fa-4x fa-laptop-code text-primary mb-5"></i>
                <img src="{{ URL::asset('img/lam.png') }}" width="130" height="150">
    <h3 class="h4 mb-2"><b>Lamborghini</b> </h3>
    <p class="text-muted mb0">Kelebihan Adalah : mobil bebentuk mid-rear, mesin dual-clutch V10 natural menciptakan 610 hp, kecepatan yaitu 0-100km/jam dengan waktu 2,8 . lebih cepat dari Nissan GT-R.</p>
  </div>
</div>
				
			</div>
		</div>
        <hr class="divider my-4">
	</section>
    <div class="collection_section">
        

@endsection
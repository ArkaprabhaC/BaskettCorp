@extends('layout.app')

@section('title', 'About Us | Baskett')

@section('custom-styles')
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/aboutus.css">

@endsection


@section('main-body')
<div class="super_container">
	<!-- Header -->

	@include('layout.navbar')


	<!-- What We Do -->
    <div class="aboutus-outer">
		<div class="container" >

            <p>What started as a coffee table conversation is now a registered organization with a mission to eliminate world food wastage
                     and provide the poorer sections of the society with high-quality affordable groceries.</p>

            <h3><span>Our Founders: </span></h3>

		    <div class="row">
                    
                    <div class="col-12 col-md-4 content">
                        <img src="images/DR.png" class="img-founders"/>
                        <p style="text-align:center">Deepayan Roy</p>
                        <p style="text-align:center">Founder & Head</p>
                    </div>
                    <div class="col-12 col-md-4 content">
                        <img src="images/Arkaprabha.jpg" class="img-founders"/>
                        <p style="text-align:center">Arkaprabha Chatterjee</p>
                        <p style="text-align:center">Co-Founder & Tech Lead</p>
                    </div>
                    <div class="col-12 col-md-4 content">
                        <img src="images/KD.png" class="img-founders"/>
                        <p style="text-align:center">Kaustav Das</p>
                        <p style="text-align:center">Co-Founder, Head-PR and Developer</p>
                    </div>
            </div>
        </div>  
    </div> 

    @include('layout.footer')	
@endsection
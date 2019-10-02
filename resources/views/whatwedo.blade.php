@extends('layout.app')

@section('title', 'What We Do | Baskett')

@section('custom-styles')
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
@endsection


@section('main-body')
<div class="super_container">
	<!-- Header -->

	@include('layout.navbar')


	<!-- What We Do -->
    <div class="whatwedo-outer">
		<div class="container">
			
				<div class="col-12">
                    <p>What started as a coffee table conversation is now a registered organization with a mission to eliminate world food wastage
                     and provide the poorer sections of the society with high-quality affordable groceries.</p>

                    <h3>Our Founders: </h3>
                    <div class="col-4">
                        <img src="images/Arkaprabha.jpg" style="height:200px;width:auto;border-radius:50%;display:block;margin:0 auto;"/>
                        <p style="text-align:center">Arkaprabha Chatterjee</p>
                        <p style="text-align:center">Co-Founder & Tech Lead</p>
                    </div>
                    <div class="col-4">
                        <img src="images/Arkaprabha.jpg" style="height:200px;width:auto;border-radius:50%;display:block;margin:0 auto;"/>
                        <p style="text-align:center">Arkaprabha Chatterjee</p>
                        <p style="text-align:center">Co-Founder & Tech Lead</p>
                    </div>
                    <div class="col-4">
                        <img src="images/Arkaprabha.jpg" style="height:200px;width:auto;border-radius:50%;display:block;margin:0 auto;"/>
                        <p style="text-align:center">Arkaprabha Chatterjee</p>
                        <p style="text-align:center">Co-Founder & Tech Lead</p>
                    </div>
                </div>
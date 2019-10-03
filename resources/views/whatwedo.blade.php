@extends('layout.app')

@section('title', 'What We Do | Baskett')

@section('custom-styles')
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/whatwedo.css">

@endsection


@section('main-body')
<div class="super_container">
	<!-- Header -->

	@include('layout.navbar')


	<!-- What We Do -->
    <div class="whatwedo-outer">
		<div class="container" >

            <p>
                Baskett provides solutions to retailers, wholesalers and distributors to vend off fruits, vegetables &amp; groceries that
                are nearing the end of their shelf life at optimal prices so that:</p>
                <ul>
                    <li> Retailers can cover their losses that they accrue from unsold perished groceries. </li>
                    <li> Customers can buy F&amp;V and other groceries at jaw-dropping discounts </li>
                    <li> Food Wastage is virtually eliminated!</li>
                </ul>
            <p>
                In short, a win-win-win situation!
                We received our first round of funding from Instade LLP. and IEM-UEM Trust in 2018, amounting to a total of
                INR 65,000 ($950). We love our investors, who have mentored us throughout this wonderful journey!
            </p>

            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="images/Pr.png" class="product-screens"/>
                </div>
                <div class="col-12 col-md-6">
                    <img src="images/PF.png" class="product-screens"/>
                </div>
            </div>
            
        </div>  
    </div> 

    @include('layout.footer')	
@endsection
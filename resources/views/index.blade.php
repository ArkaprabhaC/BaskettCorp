
@extends('layout.app')
@section('title','Baskett')

@section('custom-styles')
<link href="{{ asset('plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
@endsection

@section('main-body')

	<!--POPUP ALERT MESSAGES MARKUP-->
	@if(session('alertsuccess'))
		<div class="alert alert-success custom-alert" >
		<strong>{{session('alertsuccess')}}</strong>
		</div>
	@endif

	@if(session('alerterror'))
		<div class="alert alert-error custom-alert" >
		<strong>{{session('alerterror')}}</strong>
		</div>
	@endif
	<!--POPUP ALERT MESSAGES MARKUP END-->

	
<div class="super_container">


	<!-- Header -->

	@include('layout.navbar')
		


	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/grocery-store.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<!--<div class="home_slider_subtitle"></div>-->
							<div class="home_slider_title">Baskett</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/supermarket.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">Your daily Groceries, now cheaper!</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/music-shopping.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Promo -->

	<div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title">Hot Deals On Categories</div>
					</div>
				</div>
			</div>
			<div class="row promo_container">

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="images/cereal.jpg" alt="">
							<div class="promo_content promo_content_1">
								<div class="promo_title">-30% off</div>
								<div class="promo_subtitle">on Cereals</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Shop Now</a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="images/beach-beverage.jpg" alt="">
							<div class="promo_content promo_content_2">
								<div class="promo_title">-30% off</div>
								<div class="promo_subtitle">on Beverages</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Shop Now</a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="images/wheat.jpg" alt="">
							<div class="promo_content promo_content_3">
								<div class="promo_title">-25% off</div>
								<div class="promo_subtitle">on Grains</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Shop Now</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="arrivals">
		<div class="container">

		
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">Items currently with us</div>
					
					</div>
				</div>
			</div>
			<div class="row products_container">

				
				<!-- Product -->
				
				@foreach($products as $product)
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">

						<img src="{{url('images',$product->image)}}" class=" p-4" style="display: block;margin: 0 auto;" height="300" width="320" alt="">
							
							<div class="product_expiry">
								<div class="text-uppercase">
									
									Expires in {{$datediff[$product->id]->days}} day(s)</div>
							</div>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">{{ $product->name }}</a></div>
								<span class="product_price_old">&#x20B9;{{ $product->price }}</span>
								<span class="product_price_new">&#x20B9;5</span>
								<span class="product_discount">(10% off)</span>
							</div>
							<div class="product_options">
							
								<a href="/add-cart/{{$product->id}}" style="color: inherit;">
									<div class="product_fav product_option">
									+
									</div>
								</a>
							</div>
						</div>
					</div>
				
				</div>
				@endforeach
				
	
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<!--<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(images/newsletter.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							
							<div class="section_title">subscribe to Baskett newsletter</div>
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form action="#">
								<input type="email" class="newsletter_input" required="required" placeholder="E-mail here">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>-->
@include('layout.footer')
@endsection
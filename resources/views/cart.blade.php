@extends('layout.app')

@section('title', 'Cart - Baskett')

@section('custom-styles')
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/cart.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Shopping Cart</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>Shopping Cart</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart -->

	<div class="cart_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cart_title">your shopping cart</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_bar d-flex flex-row align-items-center justify-content-start">
						<div class="cart_bar_title_name">Product</div>
						<div class="cart_bar_title_content ml-auto">
							<div class="cart_bar_title_content_inner d-flex flex-row align-items-center justify-content-end">
								<div class="cart_bar_title_price">Price</div>
								<!---<div class="cart_bar_title_quantity">Quantity</div>-->
								<!--<div class="cart_bar_title_total">Total</div>-->
								<div class="cart_bar_title_button"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_products">
						<ul>
							@foreach($cartproducts as $cart)
								<li class=" cart_product d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
									<!-- Product Image -->
									<div class="cart_product_image"><img src="/uploads/products/1547982303.jpg" alt="" height="100px" width="100px"></div>
									<!-- Product Name -->
									<div class="cart_product_name"><a href="#">{{ $cart['productname'] }}</a></div>
									<div class="cart_product_info ml-auto">
										<div class="cart_product_info_inner d-flex flex-row align-items-center justify-content-md-end justify-content-start">
											<!-- Product Price -->
											<div class="cart_product_price">&#x20B9; {{ $cart['productprice'] }}</div>
											<!-- Product Quantity -->
											<!--<div class="product_quantity_container">
												<div class="product_quantity clearfix">
													<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
													<div class="quantity_buttons">
														<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
														<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
													</div>
												</div>
											</div>-->
											<!-- Products Total Price -->
											<!--<div class="cart_product_total">$35.00</div>-->
											<!-- Product Cart Trash Button -->
											<div class="cart_product_button">
												<a href="/cart/deleteitem/{{$cart['id']}}"><button class="cart_product_remove"><img src="images/trash.png" alt=""></button></a>
											</div>
										</div>
									</div>
								</li>
							@endforeach

						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_control_bar d-flex flex-md-row flex-column align-items-start justify-content-start">
						<button class="button_clear cart_button">clear cart</button>
						<!--<button class="button_update cart_button">update cart</button>-->
						<button class="button_update cart_button_2 ml-md-auto">continue shopping</button>
					</div>
				</div>
			</div>
			<div class="row cart_extra">
				<!-- Cart Coupon -->
				<div class="col-lg-6">
					<div class="cart_coupon">
						<div class="cart_title">coupon code</div>
						<form action="#" class="cart_coupon_form d-flex flex-row align-items-start justify-content-start" id="cart_coupon_form">
							<input type="text" class="cart_coupon_input" placeholder="Coupon code" required="required">
							<button class="button_clear cart_button_2">apply coupon</button>
						</form>
					</div>
				</div>
				<!-- Cart Total -->
				<div class="col-lg-5 offset-lg-1">
					<div class="cart_total">
						<div class="cart_title">cart total</div>
						<ul>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Subtotal</div>
								<div class="cart_total_price ml-auto">&#x20B9; {{$totalPrice}}</div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Service Charge</div>
								<div class="cart_total_price ml-auto">&#x20B9; 100</div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Total</div>
								<div class="cart_total_price ml-auto">&#x20B9; {{$totalPrice+100}}</div>
							</li>
						</ul>
						<a href="/checkout" class="color:inherit;"><button class="cart_total_button">proceed to checkout</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<!--<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image parallax-window" data-parallax="scroll" data-image-src="images/cart_nl.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row newsletter_row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">only the best</div>
							<div class="section_title">subscribe for a 20% discount</div>
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
						<div class="newsletter_text">Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestib ulum ultrices nulla. Aliquam egestas tempor leo.</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	@include('layout.footer')
	
@endsection
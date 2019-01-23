@extends('layout.app')

@section('title', 'Checkout - Baskett')

@section('custom-styles')
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/lychee.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title"><strong>Checkout</strong></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->

	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Details -->
				<div class="col-lg-6">
					<div class="billing">
						<div class="checkout_title">billing details</div>
						<div class="checkout_form_container">
							<form action="/place-order" method="POST" id="checkout_form">
								@csrf
								<input type="text" class="checkout_input" placeholder="First Name" value="{{ $cur_user['name'] }}" required="required" readonly>
									
								<input type="text" class="checkout_input" placeholder="E-mail" required="required" value="{{ $cur_user['email'] }}" readonly>
								
								<input type="text" class="checkout_input" placeholder="Address" required="required" value="{{ $cur_user['address'] }}" readonly>

								<input type="text" class="checkout_input" placeholder="State" required="required" value="{{ $cur_user['state'] }}" readonly>
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-between">
									<input type="text" class="checkout_input checkout_input_50" placeholder="Zipcode" required="required" value="{{ $cur_user['pincode'] }}" readonly>
									<input type="text" class="checkout_input checkout_input_50" placeholder="Phone No" required="required" value="{{ $cur_user['phone'] }}" readonly>
								</div>
								<textarea name="checkout_comment" id="checkout_comment" class="checkout_comment" placeholder="Leave a comment about your order. Ex: keep the food fresh, strong packaging."></textarea>
								<!--<div class="billing_options">
									<div class="billing_account">
										<input type="checkbox" id="checkbox_account" name="regular_checkbox" class="regular_checkbox checkbox_account">
										<label for="checkbox_account"><img src="images/checked.png" alt=""></label>
										<span>Create an account</span>
									</div>
									<div class="billing_shipping">
										<input type="checkbox" id="checkbox_shipping" name="regular_checkbox" class="regular_checkbox checkbox_shipping">
										<label for="checkbox_shipping"><img src="images/checked.png" alt=""></label>
										<span>Ship to a different address</span>
									</div>
								</div>-->
							</form>
						</div>
					</div>
				</div>

				<!-- Cart Details -->
				<div class="col-lg-6">
					<div class="cart_details">
						<div class="checkout_title">cart total</div>
						<div class="cart_total">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Product</div>
									<div class="cart_total_price ml-auto">Total</div>
								</li>

								@foreach($cartproducts as $cart)
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_total_title">{{ $cart['productname'] }}</div>
										<div class="cart_total_price ml-auto">&#x20B9; {{ $cart['productprice'] }}</div>
									</li>
								@endforeach
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Subtotal</div>
									<div class="cart_total_price ml-auto">&#x20B9; {{ $totalPrice }}</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Service Charge</div>
									<div class="cart_total_price ml-auto">&#x20B9; 100</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start total_row">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_price ml-auto">&#x20B9; {{ $totalPrice+100 }}</div>
								</li>
							</ul>
						</div>
						<!--<div class="payment_options">
							<div>
								<input type="radio" id="radio_payment_1" name="regular_radio" class="regular_radio">
								<label for="radio_payment_1">cash on delivery</label>
							</div>
							<div>
								<input type="radio" id="radio_payment_2" name="regular_radio" class="regular_radio" checked>
								<label for="radio_payment_2">payTM</label>
								<div class="visa payment_option"><a href="#"><img src="images/visa.jpg" alt=""></a></div>
								<div class="master payment_option"><a href="#"><img src="images/master.jpg" alt=""></a></div>
							</div>
							<div>
								<input type="radio" id="radio_payment_2" name="regular_radio" class="regular_radio" checked>
								<label for="radio_payment_2">CCAvenue</label>
								<div class="visa payment_option"><a href="#"><img src="images/visa.jpg" alt=""></a></div>
								<div class="master payment_option"><a href="#"><img src="images/master.jpg" alt=""></a></div>
							</div>-->
							<br>
							<span>*Payment is to be made at the store after receiving the items.</span>
							<button class="cart_total_button">place order</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<!--<div class="newsletter_image parallax-window" data-parallax="scroll" data-image-src="images/cart_nl.jpg" data-speed="0.8"></div>-->
			<div class="container">
				<!--<div class="row options">

					
					<div class="col-lg-3">
						<div class="options_item d-flex flex-row align-items-center justify-content-start">
							<div class="option_image"><img src="images/option_1.png" alt=""></div>
							<div class="option_content">
								<div class="option_title">30 Days Returns</div>
								<div class="option_subtitle">No questions asked</div>
							</div>
						</div>
					</div>

					
					<div class="col-lg-3">
						<div class="options_item d-flex flex-row align-items-center justify-content-start">
							<div class="option_image"><img src="images/option_2.png" alt=""></div>
							<div class="option_content">
								<div class="option_title">Free Delivery</div>
								<div class="option_subtitle">On all orders</div>
							</div>
						</div>
					</div>

					
					<div class="col-lg-3">
						<div class="options_item d-flex flex-row align-items-center justify-content-start">
							<div class="option_image"><img src="images/option_3.png" alt=""></div>
							<div class="option_content">
								<div class="option_title">Secure Payments</div>
								<div class="option_subtitle">No need to worry</div>
							</div>
						</div>
					</div>

					
					<div class="col-lg-3">
						<div class="options_item d-flex flex-row align-items-center justify-content-start">
							<div class="option_image"><img src="images/option_4.png" alt=""></div>
							<div class="option_content">
								<div class="option_title">24/7 Support</div>
								<div class="option_subtitle">Just call us</div>
							</div>
						</div>
					</div>-

				</div>-->
				
				
			</div>
		</div>
	</div>

	
</div>

@include('layout.footer')
@endsection
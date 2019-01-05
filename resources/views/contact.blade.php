@extends('layout.app')

@section('title', 'Baskett | Contact us')

@section('custom-styles')
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
@endsection


@section('main-body')
<div class="super_container">
	
	<!-- Header -->
	@include('layout.navbar')
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Contact Form -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="review_form_container">
						<div class="review_form_title">get in touch</div>
						<div class="review_form_content">
							<form action="#" id="review_form" class="review_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<input type="text" class="review_form_input" placeholder="Name" required="required">
									<input type="email" class="review_form_input" placeholder="E-mail" required="required">
									<input type="text" class="review_form_input" placeholder="Subject">
								</div>
								<textarea class="review_form_text" name="review_form_text" placeholder="Message"></textarea>
								<button type="submit" class="review_form_button">send message</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Text -->

	<div class="contact_text">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-12">

					<div class="contact_info text-center mx-auto">
						<div class="contact_title">contact info</div>
						<div class="contact_info_content">
							<ul>
								<li>
									<div class="contact_info_icon"><img src="images/contact_info_1.png" alt=""></div>
									<div class="contact_info_text">Rosia Road, no67, Gibraltar UK</div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="images/contact_info_2.png" alt=""></div>
									<div class="contact_info_text">office@yourbusiness.com</div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="images/contact_info_3.png" alt=""></div>
									<div class="contact_info_text">+45 7703 29293 34</div>
								</li>
							</ul>
						</div>
						<div class="contact_info_social">
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- FAQ -->
				<!--<div class="col-lg-7">
					<div class="faq">
						<div class="contact_title">faq</div>
						<div class="faq_content">

							
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Lorem ipsum dolor sit amet, consectetur?</div></div>
									<div class="accordion_panel">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Ipsum dolor sit amet, consectetur?</div></div>
									<div class="accordion_panel">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Proin eu dui porta, pretium metus vitae?</div></div>
									<div class="accordion_panel">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.</p>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>-->


			</div>
		</div>
	</div>
@include('layout.footer')
@endsection
@extends('layout.app')

@section('title','About - Baskett')

@section('custom-styles')
<link rel="stylesheet" type="text-css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
@endsection


@section('main-body')
<div class="super_container">
	
	<!-- Header -->
	@include('layout.navbar')
	
	<section class="about mb-5">
		<div class="container-fluid">
			<div class="hero" style="height: 45vh; ">
				<div class="section-title text-center text-uppercase" style="padding-top: 180px; font-family: 'Lucida', serif;font-size: 24px;color: #000; "> about us.</div>
				<div class="section-title-small text-center" style="color: #000; margin-left: 20px;font-family: 'Lucida', serif;font-size: 24px; border-bottom:1px solid #DEDADA;padding-bottom:10px">
					We are a team of passionate individuals who have a drive to change the world for the better.
				</div>
			</div>
	
			<br/>
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-md-4">
						<img src="images/Arkaprabha.jpg" style="border-radius:50%;display: block;margin:15px auto;" alt="Team Member Image" height="270px" width="270px">
						<div style="font-family: 'Lucida', serif;font-size: 25px;color: #232323;text-align: center; text-align: center;">Arkaprabha Chatterjee</div>
						<div style="font-family: 'Lucida', serif;font-size: 19px;color: #232323;text-align: center; text-align: center;">Web-Developer / Co-founder</div>
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="footer_social mt-2">
										<ul>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-12 col-md-4" >
						<img src="images/deepayan.jpeg" style="border-radius:50%;display:block;margin:15px auto;" alt="Team Member Image" height="270px" width="270px">
						<div style="font-family: 'Lucida', serif;font-size: 25px;color: #232323;text-align: center; text-align: center;">Deepayan Roy</div>
						<div style="font-family: 'Lucida', serif;font-size: 19px;color: #232323;text-align: center; text-align: center;">CEO / Founder</div>
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="footer_social mt-2">
										<ul>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>		
					</div>
					<div class="col-12 col-md-4">
						<img src="images/kaustav_new.jpg" style="border-radius:50%;display: block;margin:15px auto;" alt="Team Member Image" height="270px" width="270px">
						<div style="font-family: 'Lucida', serif;font-size: 25px;color: #232323;text-align: center; text-align: center;">Kaustav Das</div>
						<div style="font-family: 'Lucida', serif;font-size: 19px;color: #232323;text-align: center; text-align: center;"> PR / Co-Founder</div>
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="footer_social mt-2">
										<ul>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
								
					</div>	
				</div>	
			</div>
			
			
		</div>
	</section>

	@include('layout.footer')

@endsection

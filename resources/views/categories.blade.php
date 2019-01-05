@extends('layout.app')

@section('title', 'Categories - Baskett') html>

@section('custom-styles')
<link href="plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
@endsection

@section('main-body')
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
							<div class="home_title">Categories</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Categories -->

	<div class="products">
		<div class="container">
			
				<div class="col-12">
					
					<a href="#"><div class="text-center categories">
						Cereals
					</div></a><br>

					<a href="#"><div class="text-center categories">
						Grains
					</div></a><br>

					<a href="#"><div class="text-center categories">
						Packaged
					</div></a><br>

					<a href="#"><div class="text-center categories">
						Canned
					</div></a><br>

					<a href="#"><div class="text-center categories">
						Beverages
					</div></a><br>

					<a href="#"><div class="text-center categories">
						Soaps & Detergents
					</div></a><br>

				</div>	
			
		</div>

	</div>
		
		<!-- Sidebar Right -->
		
@endsection
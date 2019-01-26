<header class="header" >
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="/">Baskett</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/categories">Categories</a></li>
					<li><a href="/categories">About Us</a></li>
					<li><a href="/categories">What We Do</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">

				<div class="shopping">
					
			
					@if (Auth::guard('customer')->check())
					
						<!-- Cart -->
						<a href="/cart">
							<div class="cart">
								<img src="images/shopping-bag.svg" alt="">
								
									<div class="cart_num_container">
										<div class="cart_num_inner">
											<div class="cart_num">{{ Session::get('cartproducts')}}</div>
										</div>
									</div>
								
							</div>
						</a>
						
						<!-- Avatar -->
						<a href="/profile">
							<div class="avatar">
								<img src="images/avatar.svg" alt="">
							</div>
						</a>

						<a href="/customer/logout" class="navigation-menu">
							Logout
						</a>

					@elseif (Auth::guard('vendor')->check())
						
						<a href="/vendor/dashboard/addproduct" class="navigation-menu">
							Take me to dashboard
						</a>
						
						<a href="/vendor/logout" class="navigation-menu">
							Logout
						</a>
						
					@else
						<!-- Login & Register -->
						<a href="/customer/login" class="navigation-menu">
							Login
						</a>

						<a href="/customer/register" class="navigation-menu">
							Register
						</a>

					@endif
					
				
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Baskett</a></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#">Home</a></li>
				<li class="menu_mm"><a href="#">Categories</a></li>
				<li class="menu_mm"><a href="#">Register/Login</a></li>
				<li class="menu_mm"><a href="#">About Us</a></li>
				<li class="menu_mm"><a href="#">Contact</a></li>
			</ul>
		</nav>
	</div>

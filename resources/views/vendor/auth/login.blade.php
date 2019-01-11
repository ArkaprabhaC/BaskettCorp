<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Vendor Login / Baskett</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Baskett">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
		<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{asset('styles/login_signup.css')}}">
		<style>
			
		</style>
	</head>
	<body>

		<div class="container-fluid">
			<div class="col-12" style="transform: translateY(10%); height: 100vh">
					<div class="col-12 col-md-6 mx-auto">
						<div class="signin-title col-10 pb-4">Baskett Vendor Login</div>
						
						<form action="" method="POST" >
							@csrf

							 <div class="form-group col-12 col-md-12">
								    <input type="text" class="form-control" name="email" placeholder="Email">
							 </div>
							 
							 <div class="form-group col-12 col-md-12">
								    <input type="password" class="form-control" name="password" placeholder="Password">
							 </div>
							
							<div class="form-group col-12 col-md-12">
								<a class="btn btn-link" style="display:block;color:black;" href="/vendor/password/reset">
                                    Forgot Your Password?
                            	</a>
							</div>

							<input type="submit" name="submit" value="Log in" style="display: block;cursor: pointer;" class="btn btn-primary mx-auto col-9 mx-auto mb-5">

						</form>
					</div>
			</div>

		</div>
		





	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
	<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
	<script src="{{asset('plugins/easing/easing.js')}}"></script>
	<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
	<script src="{{asset('js/product_custom.js')}}"></script>
	</body>
</html>
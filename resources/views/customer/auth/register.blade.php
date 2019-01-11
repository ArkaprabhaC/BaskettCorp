	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>User Signup / Baskett</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Baskett">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
		<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{asset('styles/login_signup.css')}}">
	</head>
	<body>
		<div class="container-fluid" style="margin:0;padding:0;">
			<div class="row">
				<div class="col-12 col-md-8 background" style="height: 100vh;background-image: url({{asset('images/bananas.jpg')}}); background-size: cover;" >
					<div class="background-header">All your daily groceries at a way cheaper price!</div>
				</div>
				<div class="col-12 col-md-4" style="height: 100vh;  overflow-y:scroll;">
					<div class="form-outer pt-5 col-10 col-md-12 pb-5">
						<div class="signin-title col-10 mx-auto">Sign up</div>
						<small style="padding-left: 2.1rem;">Vendor signup</small>
						
						<div class="text-center mx-auto col-10 mt-3">
							<a href="/vendor/register" class="btn btn-primary col-12" class="">Vendor signup</a>
						</div>

						<hr>

						<small style="padding-left: 2.1rem;">Customer signup</small>

						<form method="POST" action="/customer/register" class="col-10 mx-auto mt-2">

									@csrf
									<div class="form-group">
										<input type="text" class="form-control" name="name" id="" aria-describedby="nameInput" placeholder="Enter name">
									</div>
									<div class="form-group">
										<input type="date" class="form-control" name="dob" id="" aria-describedby="nameInput" placeholder="Enter DOB">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="" name="email"aria-describedby="emailInput" placeholder="Enter email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="phone" id="" aria-describedby="phoneInput" placeholder="Enter phone no.">
									</div>
									<div class="form-group">
										<select class="form-control" name="state" id="FormControl">
											<option>Select state</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
									<div class="form-group">
										<select class="form-control" name="city" id="FormControl">
											<option>Select city</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>

									<div class="form-group">
										<input type="text" class="form-control" name="flatno" id="" aria-describedby="flatInput" placeholder="Enter your flat and house number">
									</div>

									<div class="form-group">
										<input type="text" class="form-control" name="address" id="" aria-describedby="addressInput" placeholder="Enter your address">
									</div>

									<div class="form-group">
										<input type="text" class="form-control" name="pincode" id="" aria-describedby="pincodeInput" placeholder="Enter your pincode">
									</div>

									<div class="form-group">
										<input type="password" class="form-control" id="" name="chk_password" placeholder="Enter Password">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" id="" name="password" placeholder="Confirm Password">
									</div>
									
									<input type="submit" name="submit" value="Sign up" style="display: block;cursor: pointer;" class="btn btn-primary mx-auto">
									
						</form>

					</div>
				</div>
			</div>
			
		</div>
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
	<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
	</body>
	</html>
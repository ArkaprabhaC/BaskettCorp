<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Vendor Register / Baskett</title>
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
			<div class="col-12 mt-5">
					<div class="col-12 col-md-6 mx-auto">
						<div class="signin-title col-10">Baskett Vendor Signup</div>
						<small >Basic Details</small>
						<form action="/vendor/register" method="POST" >
							@csrf
						     <div class="form-group col-12 col-md-12">
								    <input type="text" name="vendorname" class="form-control" placeholder="Enter vendor name">
							</div>
								
							 <div class="form-group col-12 col-md-12">
								    <input type="email" class="form-control" name="email" placeholder="Enter email">
							 </div>
							 

							 <div class="form-group col-12 col-md-12">
								    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
							 </div>


							<div class="row">
								  <div class="form-group col-12 col-md-6">
								    <input type="password" class="form-control" name="chk_password" placeholder="Password">
								  </div>
								  <div class="form-group col-12 col-md-6">
								    <input type="password" class="form-control" name="password" placeholder="Confirm Password">
								  </div>
							</div>

							<hr>
							
							<small >Store and other details</small>
							 <div class="form-group col-12 col-md-12">
								    <input type="text" class="form-control" name="storename" placeholder="Enter store name">
							 </div>


							  <div class="form-group col-12 col-md-12">
								    <input type="text" class="form-control" name="address" placeholder="Enter address of the store">
							 </div>

							 <div class="form-group col-12 col-md-12">
								    <input type="text" class="form-control" name="pincode" placeholder="Enter PINCODE of the store">
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

							 <input type="submit" name="submit" value="Sign up" style="display: block;cursor: pointer;" class="btn btn-primary col-9 mx-auto mb-5">

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
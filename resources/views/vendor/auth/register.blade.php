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
										
						   <!--FORM VALIDATION--->
						@if(session('alert'))
							<div class="alert alert-danger page-alert m-3" id="alert-4">
								<button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
								 {{ session('alert') }}
							
							</div>
						@endif

						@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						


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
											<option value="not-selected">Select State</option>
											@foreach($states as $state)
												<option value="{{$state}}">  {{ $state }} </option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<select class="form-control" name="city" id="FormControl">
											<option value="not-selected">Select City</option>
											 @foreach($cities as $city)
												<option value="{{$city}}">  {{ $city }} </option>
											@endforeach
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
	<script>
		$('.box').boxWidget('toggle')
	</script>

	<script>
	//Close alert for bootstrap notifications
		$('.page-alert .close').click(function(e) {
			e.preventDefault();
			$(this).closest('.page-alert').slideUp();
		});
		
	</script>
	</body>
</html>
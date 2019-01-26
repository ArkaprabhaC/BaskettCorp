	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>User Login / Baskett</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Baskett">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
		<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{asset('styles/login_signup.css')}}">
		<style>
			.form-outer{
				margin-top: 5vh;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid" style="margin:0;padding:0;">
			<div class="row">
				<div class="col-12 col-md-8 background" style="height: 100vh;background-image: url({{asset('images/bananas.jpg')}}); background-size: cover;" >
					<div class="background-header">All your daily groceries at a way cheaper price!</div>
				</div>
				<div class="col-12 col-md-4" style="height: 100vh;  overflow-y:scroll;">
					<div class="form-outer pt-5 col-10 col-md-12 pb-5">

						<!--FORM VALIDATION--->
						@if(session('alert'))
							<div class="alert alert-danger page-alert m-3" id="alert-4">
								<button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
								 {{ session('alert') }}
							
							</div>
						@endif


						<div class="signin-title col-10 mx-auto">Login</div>
						<small style="padding-left: 2.1rem;">Vendor signin</small>
						
						<div class="text-center mx-auto col-10 mt-3 pb-2">
							<a href="/vendor/login" class="btn btn-primary col-12" >Vendor Login</a>
						</div>

						<hr>
						
						<small style="padding-left: 2.1rem;">Customer signin</small>

						<form method="POST" action="/customer/login" class="col-10 mx-auto mt-2">
							@csrf
							<div class="form-group">
								<input type="email" class="form-control" id="" name="email" aria-describedby="emailInput" placeholder="Enter email">
							</div>
							
							<div class="form-group">
								<input type="password" class="form-control" id="" name="password" placeholder="Enter Password">
							</div>
							
							<div class="form-group col-12 col-md-12">
								<a class="btn btn-link" style="display:block;color:black;" href="/customer/password/reset">
                                    Forgot Your Password?
                            	</a>
							</div>

							<input type="submit" name="submit" value="Log in" style="display: block;cursor: pointer;" class="btn btn-primary mx-auto">
							
						</form>

					</div>
				</div>
			</div>
			
		</div>
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
	<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
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
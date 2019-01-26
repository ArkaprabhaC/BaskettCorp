@extends('layout.app')

@section('title', 'Profile - Baskett')

@section('custom-styles')
<link rel="stylesheet" type="text/css" href="styles/profile.css">
<link rel="stylesheet" type="text/css" href="styles/profile_responsive.css">
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
		<div class="home_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title"><strong>Profile</strong></div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="/">Home</a></li>
									<li>Profile</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Main Body - Profile -->
    <div class="container">
         <form method="POST" action="/profile/update">
            @csrf
            <div class="form-group col-12 col-md-6 pl-0">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{Auth::guard('customer')->user()->name}}">
            </div>
            <div class="form-group col-12 col-md-6 pl-0">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" readonly placeholder="Enter email" value="{{Auth::guard('customer')->user()->email}}">
            </div>
            <div class="form-group col-12 col-md-6 pl-0">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{Auth::guard('customer')->user()->password}}" readonly>
            </div>
             <div class="form-group col-12 col-md-6 pl-0">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{Auth::guard('customer')->user()->address}}">
            </div>
            <div class="form-group col-12 col-md-6 pl-0">
                <label class="form-label">Flat Number</label>
                <input type="text" name="flatno" class="form-control" placeholder="Enter flat no." value="{{Auth::guard('customer')->user()->flatno}}">
            </div>
             <div class="form-group col-12 col-md-6 pl-0">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="dob" class="form-control" placeholder="Enter your DOB" value="{{Auth::guard('customer')->user()->dob}}">
            </div>
            <div class="form-group col-12 col-md-6 pl-0">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter your phone no." value="{{Auth::guard('customer')->user()->phone}}">
            </div>
            <div class="form-group col-12 col-md-6 pl-0">
                <label class="form-label">Pincode</label>
                <input type="text" name="pincode" class="form-control" placeholder="Enter your pincode" value="{{Auth::guard('customer')->user()->pincode}}">
            </div>
            <button type="submit" class="btn btn-primary ">SAVE CHANGES</button>
        </form>
    </div>


	@include('layout.footer')
	
@endsection
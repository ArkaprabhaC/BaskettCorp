@extends('layout.admin')

@section('page-header', 'Settings')
@section('optional-description', 'you can edit your details from here')

@section('admin-content')
    you are now in vendor dashboard
    <section class="content">
      <div class="row">
      
        <!--bootstrap notifications-->
        @if(session('alert-success'))
          <div class="alert alert-success page-alert" id="alert-4">
            <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>Awesome!</strong> {{ session('alert-success') }}
        
          </div>
        @endif

        @if(session('alert-error'))
          <div class="alert alert-success page-alert" id="alert-4">
            <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>Oh.</strong> {{ session('alert-error') }}
        
          </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger page-alert" id="alert-4">
                  <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  {{ $error }}
                </div>
            @endforeach
        @endif

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit your details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" id="update-profile-pic" action="/vendor/dashboard/updateprofilepic" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <img src="/uploads/avatars/{{$vendor->avatar}}" style="display:block; margin:0 auto;border-radius:50%; height:180px; width:180px; border: 5px solid #3c8dbc;"/>
                      <label for="file-upload" class="custom-file-upload" style="margin:0 auto;display:block; width:170px;margin-top:2rem;">
                          <i class="fa fa-cloud-upload"></i> Upload a new image
                      </label>
                      <input id="file-upload" style="display:none;" type="file" name="avatar"/>
                    </div>
            </form>

            <form role="form" method="POST" action="/vendor/dashboard/settings" enctype="multipart/form-data">
              @csrf

              <div class="box-body">
                <div class="form-group">
                  <label>Vendor Name:</label>
                  <input type="text" name="name" class="form-control" value="{{ $vendor->vendorname }}" placeholder="Enter vendor name">
                </div>
                <div class="form-group">
                  <label>Storename:</label>
                  <input type="text" name="storename" class="form-control" value= "{{ $vendor->storename }}" placeholder="Enter vendor store name">
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <input type="email" name="email" value="{{$vendor->email}}" class="form-control" placeholder="Enter vendor email">
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" name="new_password" class="form-control" placeholder="Enter a new password (leave it blank if you do not want to change password)">
                  <small>Enter a new password if you want to change your current password</small>
                </div>
                <div class="form-group">
                  <label>Phone:</label>
                  <input type="text" name="phone" class="form-control" value="{{$vendor->phone}}" placeholder="Enter vendor phone">
                </div>
                <div class="form-group">
                    <select class="form-control" name="state" id="FormControl" value="1">
                      <option value="not-selected">Select State</option>
                      @foreach($states as $state)
                        <option value="{{$state}}" {{ Auth::guard('vendor')->user()->state === $state ? 'selected' : '' }}>  {{ $state }}</option>
                      @endforeach

                    </select>
                </div>
                <div class="form-group">
                  <select class="form-control" name="city" id="FormControl" >
                    <option value="not-selected">Select city</option>
                     @foreach($cities as $city)
                        <option value="{{$city}}" {{ Auth::guard('vendor')->user()->city === $city ? 'selected' : '' }}>  {{ $city }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Pincode:</label>
                  <input type="text" name="pincode" class="form-control" value= "{{ $vendor->pincode }}"placeholder="Enter vendor pincode">
                </div>
                <div class="form-group">
                  <label>Address:</label>
                  <input type="text" name="address" class="form-control" value="{{ $vendor->address }}" placeholder="Enter vendor address">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>

            </form>
          </div>
          <!-- /.box -->
        </div>
    </div>
    </section>
@endsection
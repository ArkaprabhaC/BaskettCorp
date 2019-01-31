@extends('layout.admindash')

@section('page-header', 'Admin Dashboard')
@section('optional-description', '')

@section('admin-content')
     <section class="content">
      <div class="row">
      
        <!--bootstrap notifications-->
        @if(session('alert-success'))
          <div class="alert alert-success page-alert m-3" id="alert-4">
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
        <!--bootstrap notifications end-->


        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box ">
            <div class="box-header with-border">
              <h3 class="box-title">Edit your details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" id="update-profile-pic" action="/admin/updateprofilepic" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <img src="/uploads/avatars/{{$admin->avatar}}" style="display:block; margin:0 auto;border-radius:50%; height:180px; width:180px; border: 5px solid #00a65a;"/>
                      <label for="file-upload" class="custom-file-upload" style="margin:0 auto;display:block; width:170px;margin-top:2rem;">
                          <i class="fa fa-cloud-upload"></i> Upload a new image
                      </label>
                      <input id="file-upload" style="display:none;" type="file" name="avatar"/>
                    </div>
            </form>

            <form role="form" method="POST" action="/admin/settings" enctype="multipart/form-data">
              @csrf

              <div class="box-body">
                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" name="name" class="form-control" value="{{ $admin->name }}" placeholder="Enter vendor name">
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <input type="email" name="email" value="{{$admin->email}}" class="form-control" placeholder="Enter vendor email">
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" name="new_password" class="form-control" placeholder="Enter a new password (leave it blank if you do not want to change password)">
                  <small>Enter a new password if you want to change your current password</small>
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


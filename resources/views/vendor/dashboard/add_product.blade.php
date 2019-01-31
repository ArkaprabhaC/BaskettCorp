@extends('layout.vendordash')

@section('page-header', 'Add Products')
@section('optional-description', 'you can add products from here')


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
              <h3 class="box-title">Add product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="/vendor/dashboard/addproduct" enctype="multipart/form-data">
              @csrf

              <div class="box-body">
                <div class="form-group">
                  <label>Product name:</label>
                  <input type="name" name="name" class="form-control" placeholder="Enter product name">
                </div>
                <div class="form-group">
                  <label>Product price:</label>
                  <input type="name" name="price" class="form-control" placeholder="Enter product price">
                </div>
                
                <div class="form-group">
                  <label>Enter product image:</label>
                  <input type="file" name="product_image">

                  <p class="help-block">A good picture of the product attracts customers to buy the product.</p>
                </div>

               <!-- Datepicker as text field -->         
                <div class="input-group date">
                    <label>Enter product expiry date:</label>
                    <input type="date" name="expiry_date">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Post Product</button>
              </div>

            </form>
          </div>
          <!-- /.box -->
        </div>
    </div>
    </section>
@endsection
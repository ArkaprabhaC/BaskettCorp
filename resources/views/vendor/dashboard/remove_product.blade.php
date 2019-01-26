@extends('layout.vendordash')

@section('page-header', 'Remove Products')
@section('optional-description', 'you can remove your products from the system here')

@section('admin-content')
    you are now in vendor dashboard
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
            @if(session('alert-success'))
                <div class="alert alert-success page-alert" id="alert-4">
                    <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <strong>Awesome!</strong> {{ session('alert-success') }}
                
                </div>
            @endif

            @if(empty($products))
                <div class="alert alert-info page-alert" id="alert-4">
                    <strong>Oh. It seems like you don't have any products added yet. </strong>Add some products for this section to work.
                 </div>
            @else
                @foreach ($products as $product)
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Product ID #{{$product['id']}}</h3>
                            <div class="box-tools pull-right">
                            <!-- Collapse Button -->
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <span class="pull-left" style="font-size:2rem;"><strong>{{$product['name']}}</strong></span>
                            <form class="pull-right" method="POST" action="/vendor/dashboard/removeproduct">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product['id']}}">
                                <input type="submit" name="removeBtn" value="Remove Product" class="form-control">
                            </form>
                            
                        </div>
                        <!-- /.box-body -->
                        
                    </div>
                    <!-- /.box -->
                @endforeach
            @endif
 
          <!-- /.box -->
        </div>
    </div>
    </section>
@endsection
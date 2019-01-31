@extends('layout.admindash')

@section('page-header', 'Admin Dashboard')
@section('optional-description', '')


@section('admin-content')

                     <!--ALERT MESSAGES MARKUP--->
                    @if(session('alert-success'))
						<div class="alert alert-success page-alert m-3" id="alert-4">
							<button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
							 {{ session('alert-success') }}
							
					    </div>
				    @endif
					@if(session('alert-error'))
						<div class="alert alert-danger page-alert m-3" id="alert-4">
							<button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
							 {{ session('alert-error') }}
							
					    </div>
				    @endif



    <table id="datatable" class="display">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Phone</th>
                <th>State</th>
                <th>City</th>
                <th>Flat No</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach($customers as $cust)
                <tr>
                    <td>{{ $cust['id'] }}</td>
                    <td>{{ $cust['name'] }}</td>

                    <td>{{ $cust['email'] }}</td>

                    <td>{{ $cust['dob'] }}</td>

                    <td>{{ $cust['phone'] }}</td>

                    <td>{{ $cust['state'] }}</td>

                    <td>{{ $cust['city'] }}</td>

                    <td>{{ $cust['flatno'] }}</td>

                    <td>{{ $cust['address'] }}</td>

                    <td>{{ $cust['pincode'] }}</td>

                    <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default-{{ $cust['id'] }}">
                        <i class="fa fa-cog" aria-hidden="true"> Edit </i>
                    </button> </td>

                    <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger-{{ $cust['id'] }}">
                        <i class="fa fa-trash" aria-hidden="true"> Delete </i>
                    </button> </td>
                </tr>

                <!-------Edit modal-------->
                <div class="modal fade" id="modal-default-{{$cust['id']}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit customer</h4>
                            </div>
                            <div class="modal-body">
                                <p>You can only edit those which cannot be edited by customers by default</p>

                                <form method="POST" action="/admin/editcustomer/{{ $cust['id'] }}">
                                    @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="" name="name" aria-describedby="nameInput" placeholder="Enter customer name" value="{{ App\Customer::where('id', $cust['id'])->first()->name }}">
                                        </div>
                                            
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="" name="email" placeholder="Enter customer email" value="{{ App\Customer::where('id', $cust['id'])->first()->email }}">
                                        </div>

                                        <input type="submit" name="submit" value="Modify" style="display: block;cursor: pointer;" class="btn btn-primary mx-auto">
                                            
                                            
                                </form>

                            </div>
                            
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <!-- /.modal -->



                <!-------Delete modal-------->
                <div class="modal modal-danger fade" id="modal-danger-{{$cust['id']}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Delete Customer</h4>
                            </div>
                            <div class="modal-body">
                                <p>Write a comment to notify customer (<strong>{{App\Customer::where('id', $cust['id'])->first()->name}}</strong>) of his removal</p>

                                <form method="POST" action="/admin/deletecustomer/{{ $cust['id'] }}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" id="comment" name="removalmsg"></textarea>
                                        </div> 

                                        <input type="submit" name="submit" value="Delete customer" style="display: block;cursor: pointer;" class="btn btn-outline mx-auto">
                                            
                                            
                                </form>

                            </div>
                            
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <!-- /.modal -->

            @endforeach
        
           
        </tbody>
    </table>



@endsection
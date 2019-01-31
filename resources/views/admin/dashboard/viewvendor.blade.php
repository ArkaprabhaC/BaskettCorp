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
                <th>Phone</th>
                <th>State</th>
                <th>City</th>
                <th>Store name</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach($vendors as $vendor)
                <tr>
                    <td>{{ $vendor['id'] }}</td>
                    
                    <td>{{ $vendor['vendorname'] }}</td>

                    <td>{{ $vendor['email'] }}</td>

                    <td>{{ $vendor['phone'] }}</td>

                    <td>{{ $vendor['state'] }}</td>

                    <td>{{ $vendor['city'] }}</td>

                    <td>{{ $vendor['storename'] }}</td>

                    <td>{{ $vendor['address'] }}</td>

                    <td>{{ $vendor['pincode'] }}</td>

                    <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger-{{$vendor['id']}}">
                        <i class="fa fa-trash" aria-hidden="true"> Delete </i>
                    </button> </td>
                </tr>


                <!---- Delete user modal-------->
                <div class="modal modal-danger fade" id="modal-danger-{{$vendor['id']}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Sure you want to delete this vendor?</h4>
                        </div>
                        <div class="modal-body">
                            
                            <form method="POST" action="/admin/deletevendor/{{ $vendor['id'] }}" id="modal-delete-form">
                                @csrf
                                <div class="form-group">
                                    <label for="comment">Comment on why you removed <strong>{{ $vendor['vendorname'] }}</strong>:</label>
                                    <textarea class="form-control" rows="5" id="comment" name="removalmsg"></textarea>
                                </div> 

                                <input type="submit" name="submit" value="Delete vendor" style="display: block;cursor: pointer;" class="btn btn-outline mx-auto">

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
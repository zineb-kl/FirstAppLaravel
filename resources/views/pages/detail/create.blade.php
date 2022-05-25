@extends('layouts.app-master')


@push('client')
<script src="{{asset('assets/js/client.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/Client/client.css')}}">
@endpush

@include('scripts.client')
@section('content')



<h1>Orders</h1>
<hr/>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Orders</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="" class="btn btn-success" data-toggle="modal"><i class=" material-icons">&#xE147;</i> <span>Add New Order</span></a>
						<a href="" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Export Excel</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>ref-Order</th>
						<th>client</th>
						<th>date</th>
						<th>payment</th>
						

					</tr>
				</thead>
				<tbody>
				<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
					    <td></td>
						
						<td></td>
  
						<td></td>
						
						<td></td>
					   

						<td>
							<a href="" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							<a href="" class="visibility" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="show">visibility</i></a>
							
						</td>
					</tr>
					
			 
				</tbody>
			</table>
<div class="pagination">
</div>
</div>
</div>
@endsection
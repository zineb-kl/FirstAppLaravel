@extends('layouts.app-master')


@push('client')
<script src="{{asset('assets/js/client.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/Client/client.css')}}">
@endpush

@include('scripts.client')
@section('content')

               

<h1>Products</h1>
<hr/>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Product</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{route('createproduct')}}" class="btn btn-success" data-toggle="modal"><i class=" material-icons">&#xE147;</i> <span>Add New Product</span></a>
						<a href="{{route('export')}}" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Export Excel</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>ref-Product</th>
						<th>name</th>
						<th>designation</th>
						<th>stock</th>
						<th>unit-Price</th>
						<th>stock-unit</th>
						<th>actions</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach($product as $row )
				<tr>
						
						<td>{{$row->refProduct}}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->designation}}</td>
						<td>{{$row->stock}}</td>
						<td>{{$row->unitPrice}} $</td>
						<td>{{$row->storageUnit}}</td>

						<td>
							<a href="{{url('product/'.$row->refProduct.'/edit')}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="{{url('delete/'.$row->refProduct)}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							
						</td>
					</tr>
				
			 @endforeach
				</tbody>
			</table>
 <div class="pagination">
{{$product->links()}}
</div>
</div>
</div>
@endsection
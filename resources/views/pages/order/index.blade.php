@extends('layouts.app-master')


@push('client')
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
						<a href="{{route('createorder')}}" class="btn btn-success" data-toggle="modal"><i class=" material-icons">&#xE147;</i> <span>Add New Order</span></a>
						<a href="{{route('export')}}" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Export Excel</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>customer</th>
						<th>product</th>
						<th>date</th>
						<th>amount</th>
						<th>actions</th>
						

					</tr>
				</thead>
				<tbody>
				@foreach($Order as $row )
				<tr>
						
					    <td>{{$row->client->name}}</td>
						@foreach($row->pruducts as $pruduct )
						<td>{{$pruduct->name}}</td>
                        @endforeach
						<td>{{$row->dateOrder}}</td>
						
						<td>{{$row->price * $row->quantity}} $</td>
					   

					
			<td>
			<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    action
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{url('order/'.$row->ref_Order.'/edit')}}">edit</a>
    <a class="dropdown-item" href="{{url('delete/'.$row->ref_Order)}}">delete</a>
    <a class="dropdown-item" href="{{url('Invoice/'.$row->ref_Order.'/generateInvoice')}}">invoice</a>
	<a class="dropdown-item" href="{{url('order/'.$row->ref_Order.'/details')}}">details</a>
  </div>
</div>
			</td>
					</tr>
					@endforeach
			 
				</tbody>
			</table>
<div class="pagination">
{{$Order->links()}}
</div>
</div>
</div>
<script>
	  $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });

</script>
@endsection
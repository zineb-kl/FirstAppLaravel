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
					<div class="col-sm-3">
						<h2>Sellings <b></b></h2>
					</div>
					<div class="col-sm-3">
				@php $total="0" @endphp		
				@foreach($Order as $row )
				@php $total+=$row->amountTTC @endphp	
                @endforeach
						<p class="total"> Total:{{$total}}$</p>
						</div>
						<div class="col-sm-3">
						<p class="number"> number orders:{{$Order->count()}}</p>
						</div>
					<div class="col-sm-3">
					<a href="{{route('export')}}" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Export Excel</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>ref-order</th>
						<th>date</th>
						<th>selling price</th>
						<th>amount returned</th>
						

					</tr>
				</thead>
				<tbody>
				@foreach($Order as $row )
				<tr>
					
					    <td>{{$row->ref_Order}}</td>
						<td>{{$row->dateOrder}}</td>
						<td>{{$row->price}} $</td>
					    <td>{{$row->price * $row->quantity}} $</td>
					
					</tr>
					@endforeach
			 
				</tbody>
			</table>
<div class="pagination">
{{$Order->links()}}
</div>
</div>
</div>
@endsection
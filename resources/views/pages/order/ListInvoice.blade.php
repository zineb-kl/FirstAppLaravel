@extends('layouts.app-master')


@push('client')
<link rel="stylesheet" href="{{asset('assets/css/Client/client.css')}}">
@endpush

@include('scripts.client')

@section('content')

<h1>Invoices</h1>
<hr/>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Invoices</b></h2>
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
						
						<th>created</th>
						<th>product</th>
						<th>customer</th>
						<th>actions</th>
						

					</tr>
				</thead>
				<tbody>
				@foreach($Order as $row )
				<tr>
						
						<td>{{$row->dateOrder}}</td>
						@foreach($row->pruducts as $pruduct )
						<td>{{$pruduct->name}}</td>
                        @endforeach
					    <td>{{$row->client->name}}</td>
					   
                        <td>	
                            <a href="{{url('Invoice/'.$row->ref_Order.'/generateInvoice')}}" class="visibility" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="show">visibility</i></a>
							
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
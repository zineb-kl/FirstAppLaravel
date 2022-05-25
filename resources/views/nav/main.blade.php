

@extends('layouts.app-master')


@push('client')
<link rel="stylesheet" href="{{asset('assets/css/order/show.css')}}">
@endpush

@include('scripts.client')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Orders</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>{{$Order->count()}}</span></h2>
                    <p class="m-b-0"><span class="f-right"></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">customers</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i>
                    
				
                         <span> </span>
                   
               
                  
                </h2>
                    <p class="m-b-0"><span class="f-right"></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Revenues</h6>
                    <h2 class="text-right"><i class="fa fa-money" aria-hidden="true"></i><span></span></h2>
                    <p class="m-b-0"><span class="f-right"></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Orders </h6>
                    <h2 class="text-right"><i  class="fad fa-money"></i><span>486</span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection
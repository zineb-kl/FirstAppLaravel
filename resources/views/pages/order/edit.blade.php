@extends('layouts.app-master')

@push('addClient')
<link rel="stylesheet" href="{{asset('assets/css/Client/editClient.css')}}">
@endpush


@section('content')
@php 
 $products= App\Models\Pruduct::all();
 @endphp
<div class="container-xl">

  <!-- ***********************title***********************************-->

                <div class="title">
                     <H1>Orders</H1>
                </div>
                <hr/>
                    <form action="{{route('updateorder',['id' => $order->ref_Order])}}" method="post" >
               
                    
                    {{ csrf_field() }}
                    {{ method_field('put') }}
<!-- ***********************title form***********************************-->
                    <div class="row "> 
                      <div class="form-title">
                            <div class="col-md-12">
                                  <h2>Edit <b> Order</b></h2>
                          </div>
                     </div>
      <!-- ***********************input / label***********************************-->
     
                <div class="row mb-3">
                 <div class="col-md-4">
                   <label for="Ref_Order">order</label>
                   <input type="text" class="form-control" name="Ref_Order" value="{{$order->ref_Order}}" id="name">
                 </div>
                 
                 <div class="col-md-4">
                   <label for="client">client</label>
                   <input type="text" class="form-control" name="client_id" value="{{$order->client_id}}" id="phone" >
                 </div>
                </div>
               
                <div class="row mb-3">
                <div class="col-md-4">
                   <label for="email">date</label>
                   <input type="date" class="form-control" name="date" value="{{$order->dateOrder}}" id="email" >
                 </div>
                 <div class="col-md-4">
                   <label for="paymentway">payment method</label>
                   <input type="text" class="form-control" name="paymentway" value="{{$order->paymentWay}}" id="adresse" >
                 </div> 
               </div>

               <div class="row mb-3">
                      <div class="col-md-8">
                        <label for="refProduct">product</label>
                        <select name="refProduct" id="refProduct">
                        @foreach($order->pruducts as $pruduct )
                        <option   value="{{$pruduct->refProduct}}" >
                        {{$pruduct->name}}
                        @endforeach
                        </option>
                        @foreach($products as $product)
                          <option   value={{$product->refProduct}} >
                            {{$product->name}}
                            @endforeach
                           </select>
                      </div>
                      </div>


                      <div class="row mb-3">
                     
                     <div class="col-md-4">
                       <label for="price">price</label>
                       <input type="number" class="form-control" value="{{$order->price}}" name="price" id="price" >
                     </div>
                     <div class="col-md-4">
                       <label for="quantity">quantity</label>
                       <input type="number" class="form-control"  value="{{$order->quantity}}" name="quantity" id="quantity" >
                     </div> 
                   
                     </div>
                     <div class="row mb-3">
                     
                     <div class="col-md-4">
                       <label for="reduction">reduction(%)</label>
                       <input type="number" class="form-control" name="reduction" value="{{$order->reduction}}"  id="reduction" >
                     </div>
                     <div class="col-md-4">
                       <label for="VAT">VAT(%)</label>
                       <input type="number" class="form-control"name="VAT" value="{{$order->VAT}}" id="VAT" >
                     </div> 
                   
                     </div>
                     <div class="row mb-3">
                     
                     <div class="col-md-4">
                       <label for="amountHT">amount(excl.tax)</label>
                       <input type="text" class="form-control" name="amountHT" value="{{$order->amountHT}}" id="amountHT" >
                     </div>
                     <div class="col-md-4">
                       <label for="amountTTC">amount(incl.tax)</label>
                       <input type="text" class="form-control"name="amountTTC" value="{{$order->amountTTC}}" id="amountTTC" >
                     </div> 
                   
                     </div>
                     
 <!-- ***********************buttons***********************************-->
  
                <div class="btn-groupe">
                <div class="row mb-3">
                 <div class="col-md-2">
                   <input type="submit" name="submitbutton" class="btn btn-primary btn-lg" id="btn-primary" value="save">
                   </div>
                   <div class="col-md-6">
                  <input type="submit" name="submitbutton" class="btn btn-warning btn-lg" id="btn-danger" value="List Order">
                </div>
                </div>
                </div>
</form>
            
</div>

@endsection
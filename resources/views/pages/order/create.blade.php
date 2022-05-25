@extends('layouts.app-master')

@push('addClient')

<script src="{{asset('assets/js/createOrder.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/order/createorder.css')}}">
@endpush


@section('content')
 @php 
 $customers= App\Models\Client::all();
 $products= App\Models\Pruduct::all();
 @endphp
 
                <div class="container-xl">
                  
 <!-- ***********************title***********************************-->

                      <div class="title">
                          <H1>Orders</H1>
                      </div>

                      

                        <form action="{{url('/order/store')}}" method="post" >

                        @csrf
  <!-- ***********************title form***********************************-->
    

                    <div class="row ">
                        <div class="form-title">
                            <div class="col-md-12">
                                  <h2>Add <b>Order</b></h2>
                          </div>
                      </div>
      <!-- ***********************input / label***********************************-->

                    <div class="row mb-3">

                      <div class="col-md-4">

                        <label for="Ref-Order">Ref-Order</label>
                        <input type="text" class="form-control" name="Ref-Order" id="Ref-Order">
                      </div>
                      
                      <div class="col-md-4">
                        <label for="client">client</label>
                        <select name="client_id">
                          
                        <option   value="Select Customer" >
                        ----Select Customer-----
                        </option>
                          @foreach($customers as $customer)
                          <option   value={{$customer->id}} >
                            {{$customer->name}}
                            @endforeach
                           </select>
                      </div>
                  </div>



                  <div class="row mb-3">
                     
                      <div class="col-md-4">
                        <label for="date">date</label>
                        <input type="date" class="form-control" name="date" id="date" >
                      </div>
                      <div class="col-md-4">
                        <label for="stock">payment method</label>
                        <input type="text" class="form-control"name="paymentway" id="paymentway" >
                      </div> 
                    
                      </div>
                      
                      <div class="row mb-3">
                      <div class="col-md-8">
                        <label for="refProduct">product</label>
                        <select name="refProduct" id="refProduct">
                        <option   value="Select_Product" >
                        ----Select Product-----
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
                       <input type="number" class="form-control" name="price" id="price" >
                     </div>
                     <div class="col-md-4">
                       <label for="quantity">quantity</label>
                       <input type="number" class="form-control"name="quantity" id="quantity" >
                     </div> 
                   
                     </div>
                     <div class="row mb-3">
                     
                     <div class="col-md-4">
                       <label for="reduction">reduction(%)</label>
                       <input type="number" class="form-control" name="reduction" id="reduction" >
                     </div>
                     <div class="col-md-4">
                       <label for="VAT">VAT(%)</label>
                       <input type="number" class="form-control"name="VAT" id="VAT" >
                     </div> 
                   
                     </div>
                     <div class="row mb-3">
                     
                     <div class="col-md-4">
                       <label for="amountHT">amount(excl.tax)</label>
                       <input type="text" class="form-control" name="amountHT" id="amountHT" >
                     </div>
                     <div class="col-md-4">
                       <label for="amountTTC">amount(incl.tax)</label>
                       <input type="text" class="form-control"name="amountTTC" id="amountTTC" >
                     </div> 
                   
                     </div>
                     
      

      <!-- ***********************buttons***********************************-->
  
      <div class="row mb-3">
                       <div class="col-sm-2">
                        <input type="submit" name="submitbutton" class="btn btn-success btn-lg" id="btn-primary" value="next">
                      </div>

                     <div class="col-sm-3">
                        <input type="submit" name="submitbutton" class="btn btn-warning btn-lg" id="btn-danger" value="cancel">
                    </div>
                      
      </div>
                

      <!-- ***********************end form***********************************-->

      </form>
</div>
  <!-- push external js--> 

 

@endsection

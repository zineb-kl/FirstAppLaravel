@extends('layouts.app-master')

@push('addClient')
<link rel="stylesheet" href="{{asset('assets/css/Client/addClient.css')}}">
@endpush


@section('content')
                 
                <div class="container-xl">
                  
 <!-- ***********************title***********************************-->

                      <div class="title">
                          <H1>Products</H1>
                      </div>

                      <hr/>

                        <form action="{{url('/product/store')}}" method="post" >
                        @csrf
  <!-- ***********************title form***********************************-->
                        <div class="row ">

                        <div class="form-title">
                            <div class="col-md-12">
                                  <h2>Add <b>Product</b></h2>
                          </div>
                      </div>
      <!-- ***********************input / label***********************************-->

                    <div class="row mb-3">

                      <div class="col-md-4">

                        <label for="refProduct">Ref-Product</label>
                        <input type="text" class="form-control" name="refProduct" id="name">
                      </div>
                      
                      <div class="col-md-4">
                        <label for="name">name</label>
                        <input type="text" class="form-control" name="name" id="phone" >
                      </div>
                      </div>
                    
                      <div class="row mb-3">
                      <div class="col-md-4">
                        <label for="designation">designation</label>
                        <input type="text" class="form-control" name="designation" id="email" >
                      </div>
                      <div class="col-md-4">
                        <label for="stock">stock</label>
                        <input type="text" class="form-control"name="stock" id="adresse" >
                      </div> 
                    
                      </div>
                      <div class="row mb-3">
                      <div class="col-md-4">
                        <label for="unitPrice">unit-Price</label>
                        <input type="text" class="form-control" name="unitPrice" id="email" >
                      </div>
                      <div class="col-md-4">
                        <label for="storageUnit">storageUnit</label>
                        <input type="text" class="form-control" name="storageUnit" id="email" >
                      </div>
                    
                      </div>
      <!-- ***********************buttons***********************************-->
  
                      <div class="row mb-3 ">

                          <div class="col-sm-3">
                        <input type="submit" name="submitbutton" class="btn btn-success btn-lg" id="btn-primary" value="Add Product">
                      </div>

                     <div class="col-sm-2">
                        <input type="submit" name="submitbutton" class="btn btn-warning btn-lg" id="btn-danger" value="List Product">
                    </div>
                     
                    </div>
      <!-- ***********************end form***********************************-->

      </form>
</div>


@endsection
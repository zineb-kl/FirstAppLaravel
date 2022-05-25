@extends('layouts.app-master')

@push('addClient')
<link rel="stylesheet" href="{{asset('assets/css/Client/addClient.css')}}">
@endpush


@section('content')
                 
                <div class="container-xl">
                  
 <!-- ***********************title***********************************-->

                      <div class="title">
                          <H1>Customers</H1>
                      </div>

                      <hr/>

                        <form action="{{url('store')}}" method="post" >
                        @csrf
  <!-- ***********************title form***********************************-->
                    <div class="row ">

                      <div class="form-title">
                            <div class="col-md-12">
                                  <h2>Add <b> Customers</b></h2>
                        </div>
                     </div>
                    </div> 
      <!-- ***********************input / label***********************************-->

                    <div class="row mb-3">

                      <div class="col-md-4">

                        <label for="nom">name</label>
                        <input type="text" class="form-control" name="name" id="name">
                      
                      </div>
                      
                      <div class="col-md-4">
                        <label for="email">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" >
                      </div>
                      
                      </div>
                    
                      <div class="row mb-3">

                      <div class="col-md-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" >
                      </div>

                      <div class="col-md-4">
                        <label for="email">Adresse</label>
                        <input type="text" class="form-control"name="adresse" id="adresse" >
                      </div> 
                    
                      </div>
      <!-- ***********************buttons***********************************-->
  
                      <div class="row mb-3 ">

                          <div class="col-sm-3">
                        <input type="submit" name="submitbutton" class="btn btn-success btn-lg" id="btn-primary" value="Add Customer">
                      </div>

                     <div class="col-sm-2">
                        <input type="submit" name="submitbutton" class="btn btn-warning btn-lg" id="btn-danger" value="List Customer">
                    </div>
                     
                    </div>
      <!-- ***********************end form***********************************-->

      </form>
</div>


@endsection
@extends('layouts.app-master')

@push('addClient')
<link rel="stylesheet" href="{{asset('assets/css/Client/editClient.css')}}">
@endpush


@section('content')

<div class="container-xl">
  <!-- ***********************title***********************************-->

                <div class="title">
                     <H1>Customers</H1>
                </div>
                <hr/>
                    <form action="{{url('Client/'.$Client->id)}}" method="post" >
               
                    <input type="hidden" name="_method" value="PUT">
              
                    @csrf
<!-- ***********************title form***********************************-->
                    <div class="row "> 
                      <div class="form-title">
                            <div class="col-md-12">
                                  <h2>Edit <b> Customer</b></h2>
                          </div>
                     </div>
      <!-- ***********************input / label***********************************-->
     
                <div class="row mb-3">
                 <div class="col-md-4">
                   <label for="nom">name</label>
                   <input type="text" class="form-control" name="name" value="{{$Client->name}}" id="name">
                 </div>
                 
                 <div class="col-md-4">
                   <label for="email">Phone</label>
                   <input type="text" class="form-control" name="phone" value="{{$Client->phone}}" id="phone" >
                 </div>
                </div>
               
                <div class="row mb-3">
                <div class="col-md-4">
                   <label for="email">Email</label>
                   <input type="email" class="form-control" name="email" value="{{$Client->email}}" id="email" >
                 </div>
                 <div class="col-md-4">
                   <label for="email">Adresse</label>
                   <input type="text" class="form-control"name="adresse" value="{{$Client->adresse}}" id="adresse" >
                 </div> 
               </div>
 <!-- ***********************buttons***********************************-->
  
                <div class="btn-groupe">
                <div class="row mb-3">
                 <div class="col-md-2">
                   <input type="submit" name="submitbutton" class="btn btn-primary btn-lg" id="btn-primary" value="save">
                   </div>
                   <div class="col-md-6">
                  <input type="submit" name="submitbutton" class="btn btn-warning btn-lg" id="btn-danger" value="List Customers">
                </div>
                </div>
                </div>
</form>
            
</div>

@endsection
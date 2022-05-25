@extends('layouts.auth')

@section('login')

<div class="container" >
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="{{route('login-user')}}" method="post"  class="box">
                 @if (Session::has('success'))
                 <div class="alert alert-success"> {{Session::get('success')}}</div>
                 @endif
                 @if (Session::has('fail'))
                 <div class="alert alert-danger"> {{Session::get('fail')}}</div>
                 @endif
                @csrf
                  <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p>
   
                         <input type="text" name="email" placeholder="email" value="{{old('email')}}">
                        <span class='text-danger'> @error('email')  {{$message}} @enderror  </span>
                    
                    
                         <input type="password" name="password" placeholder="Password" value="{{old('password')}}">
                         <span class='text-danger'> @error('password')  {{$message}} @enderror  </span>
                    

                        </br>
                        
                         <a class="forgot text-muted" href="#">Forgot password?</a>
                       
                         <input type="submit" name="loginId" value="Login" href="#">
                         
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
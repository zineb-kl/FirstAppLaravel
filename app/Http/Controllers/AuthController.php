<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Hash;
use Session;


class AuthController extends Controller
{
    public function login()
    {
        return view ("auth.login");
    }

    public function  loginUser(Request $request)
    {
        $request ->validate([

           'email'=>'required|email',
           'password'=>'required|min:5|max:12'

        ]);

        $user=User::where('email','=',$request->email)->first();
        $password=User::where('password','=',$request->password)->first();
           
        if($user)
        {
             
            if($password)
            {

             $request->session()->put('loginId',$user->id);
                
             return  Redirect::to('dashboard');
                
            }

            else 
            {
                return back()->with('fail','password incorrect.');
            }
          
        }

        else
        {
            return back()->with('fail','This Email is not registered.');
       
        }
    }
    public function dashboard()
    {
        $Order=Order::all();
        return view("nav.main",compact('Order'));
    }
  

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('auth.login');
        }
    }
    
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     public function login(Request $request)
     {
        $validated = $request->validate([
            'email'=>'required|email',

            'password'=>'required'

        ]);


        if(Auth::attempt(['email' =>$request->email, 'password' => $request->password]))
        // in this section  check authentication ,Email,password,Usertype
        {
            if(auth()->user()->userType =='1'){

                return redirect()->route('AdminHome')->with('success','Admin Login Successful');

            }


            elseif(auth()->user()->userType =='0')
            {
                return redirect()->route('home')->with('success','User Login Successful');;

            }else{
                return redirect()->route('login')->with('error','invalid credential');
            }



        }else{
            return redirect()->route('login')->with('error','invalid credential ,Please check Email And Password');
        }




     }

    public function index(){

        return view("auth.login");
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session; 

class LoginController extends Controller
{
    public function login_data(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');

        // Retrieve the user from the database based on the provided username
        $user = Login::where('username', $credentials['username'])->first();
            
        if ($user && $user->password === $credentials['password']) {
            // Authentication successful
            return redirect()->intended('add-page');
        }
        return redirect("login-form")->with('error', 'Oops! You have entered invalid credentials');
    }

    public function addpage(){
        if(Auth::check()){
            return view('addpage');
        }
        return redirect("/login-form")->withSuccess('Opps! You do not have access');
    }
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/login-form');
    }

}



   
    
    
   